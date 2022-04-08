<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorsController extends AbstractController
{
    /**
     * @Route("/authors", name="app_authors")
     */
    public function index(): Response
    {
        return $this->render('authors/index.html.twig', [
            'controller_name' => 'AuthorsController',
        ]);
    }

    /**
     * @Route("/authors/get", name="app_authors_get")
     */
    public function GetAuthor(): Response
    {
        return $this->render('authors/index.html.twig', [
            'controller_name' => 'Authors Get Метод',
        ]);
    }

    /**
     * @Route("/authors/create", name="app_authors_create")
     */
    public function CreateAuthor(): Response
    {
        return $this->render('authors/index.html.twig', [
            'controller_name' => 'Authors Create Метод',
        ]);
    }

}
