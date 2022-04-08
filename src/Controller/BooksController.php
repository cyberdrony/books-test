<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\DomCrawler\Crawler;

class BooksController extends AbstractController
{
    /**
     * @Route("/books", name="app_book")
     */
    public function index(): RedirectResponse
    {
        return $this->redirectToRoute('app_book_get');
    }

    /**
     * @Route("/books/get", name="app_book_get")
     */
    public function GetBook(): Response
    {
        return $this->render('books/index.html.twig', [
            'controller_name' => 'BooksController',
        ]);
    }

    /**
     * @Route("/books/create", name="app_book_create")
     */
    public function CreateBook(): Response
    {
        return $this->render('books/index.html.twig', [
            'controller_name' => 'BooksController',
        ]);
    }

    /**
     * @Route("/books/parse_books", name="app_book_create")
     */
    public function getBooks(): Response
    {
        $books_catalog_urls = file_get_contents('http://www.zone4iphone.ru/catalog.php');
        $crawler = new Crawler();
        $crawler->addHtmlContent($books_catalog_urls);
        $nodeValues = $crawler->filterXPath('//link[contains(@href, "")]')->evaluate('substring-after(@href, "")');

        $book_counter = 0;
        $book_catalog = [];

        foreach ($nodeValues as $urls) {
            if (preg_match("/\.php\?cat=\d+/i", $urls)) {
                $page = 1;
                $nodeValuesMore = [];

                for(;;){
                    $books_data = file_get_contents($urls."&page=$page");
                    if (!preg_match("/\.php\?cat=\d+/i", $books_data)) { break; }

                    $crawler = new Crawler();
                    $crawler->addHtmlContent($books_data);
                    $nodeValuesMore = $crawler->filterXPath('//entry/title | //entry/author/name')->each(function (Crawler $node, $i) {
                        return $node->text();
                    });

                    $i = 1;
                    foreach ($nodeValuesMore as $k => $bookElem) {

                        if($i % 2) {
                            $bookElem = preg_replace("/\s\-\s.*\(\d+\)$/", "", $bookElem);
                            $book_catalog[$book_counter]['Name'] = $bookElem;
                            $i = 1;
                        }
                        else {
                            $book_catalog[$book_counter]['Author'] = $bookElem;
                            ++$book_counter;
                        }
                        ++$i;
                        if($book_counter > 100){ break(3); }
                    }
                    ++$page;
                }                
            }
        }

        var_dump($book_catalog);

        return $this->render('books/index.html.twig', [
            'controller_name' => 'Ok! ',
        ]);
    }

}
