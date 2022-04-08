<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Symfony\Component\DomCrawler\Crawler;

final class AddBooksToDB extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $books_catalog_urls = file_get_contents('http://www.zone4iphone.ru/catalog.php');
        $crawler = new Crawler();
        $crawler->addHtmlContent($books_catalog_urls);
        $nodeValues = $crawler->filterXPath('//link[contains(@href, "")]')->evaluate('substring-after(@href, "")');

        $book_counter = 0;
        $book_catalog = [];
        $loop_control = 0;

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
                        if($book_counter > 10000){ break(3); }
                    }
                    ++$page;
                    ++$loop_control;

                    if($loop_control > 20000) { break; }
                }                
            }
        }
    }

    public function down(Schema $schema): void
    {

    }

/*    
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE authors_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE books_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE authors (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE books (id INT NOT NULL, name VARCHAR(255) NOT NULL, author_id INT NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE authors_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE books_id_seq CASCADE');
        $this->addSql('DROP TABLE authors');
        $this->addSql('DROP TABLE books');
    }
*/

}
