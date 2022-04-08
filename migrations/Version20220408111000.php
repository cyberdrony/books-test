<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Symfony\Component\DomCrawler\Crawler;

final class Version20220408111000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        echo "Start\n\n";

        $books_catalog_urls = file_get_contents('http://www.zone4iphone.ru/catalog.php');
        $crawler = new Crawler();
        $crawler->addHtmlContent($books_catalog_urls);
        $nodeValues = $crawler->filterXPath('//link[contains(@href, "")]')->evaluate('substring-after(@href, "")');

        $book_counter = 1;
        $loop_control = 0;
        $book_catalog_names = array();
        $book_catalog_authors = array();

        foreach ($nodeValues as $urls) {
            if (preg_match("/\.php\?cat=\d+/i", $urls)) {
                $page = 1;
                $nodeValuesNext = [];

                for(;;){

                    try {
                        $books_data = file_get_contents($urls."&page=$page");
                    } catch (Exception $e) {
                        echo "Страница не отвечает > $e\n";
                        continue;
                    }

                    if (!preg_match("/\.php\?cat=\d+/i", $books_data)) { break; }

                    $crawler = new Crawler();
                    $crawler->addHtmlContent($books_data);
                    $nodeValuesNext = $crawler->filterXPath('//entry/title | //entry/author/name')->each(function (Crawler $node, $i) {
                        return $node->text();
                    });

                    $i = 1;
                    foreach ($nodeValuesNext as $k => $bookElem) {

                        if($i % 2) {
                            $bookElem = preg_replace("/\s\-\s.*\(\d+\)$/", "", $bookElem);

                            if( !preg_match("/[А-Яа-я]/", $bookElem) ) {
                                continue;
                            }

                            $book_catalog_names["$book_counter"] = $bookElem;
                            $i = 1;
                        }
                        else {
                            if(array_key_exists($book_counter, $book_catalog_names)) {
                                $book_catalog_authors["$book_counter"] = $bookElem;
                                ++$book_counter;
                            }
                        }

                        ++$i;
                        if($book_counter > 10000){ break(3); }
                    }
                    ++$page;
                    ++$loop_control;

                    if($loop_control > 20000) { break(2); }
                }                
            }
        }

        if(!empty($book_catalog_names) && !empty($book_catalog_authors)){

            $authorID = 1;
            $author_ids = array();

            $file = fopen('books_list.txt', 'w');

            foreach ($book_catalog_names as $bookID => $val) {
                if($val && $book_catalog_authors[$bookID]) {
                               
                    fputs($file, "$book_catalog_authors[$bookID]\t$val" . PHP_EOL);

                    $book_author = pg_escape_string($book_catalog_authors[$bookID]);
                    $book_name = pg_escape_string($val);

                    if (!array_key_exists($book_author, $author_ids)) {
                        $this->addSql('INSERT INTO authors (id, name) VALUES (\''.$authorID.'\', \''.$book_author.'\')');
                        $author_ids["$book_author"] = $authorID;
                        ++$authorID;
                    }

                    $this->addSql('INSERT INTO books (id, name, author_id) VALUES (\''.$bookID.'\', \''.$book_name.'\', \''. $author_ids["$book_author"] .'\')');

                }
            }

            fclose($file);
        }
    }

    private function ParseBooks() {

    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM books');
        $this->addSql('DELETE FROM authors');
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
