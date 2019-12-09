<?php
declare(strict_types=1);

namespace SimpleMVC\Model;

use PDO;

class CrudArticle {

    protected $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }
    
    public function insertArticle($title, $description, $content, $author)
    {
        $sql = "inser into Article(title, description, content, author, releaseDate) values(:title, :description, :content, :author, CURRENT_TIMESTAMP())";
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(':title', $title);
        $sth->bindValue(':description', $description);
        $sth->bindValue(':content', $content);
        $sth->bindValue(':author', $author);
        $sth->execute();

    }

    public function listArticle()
    {
        $sql = "select * from Article;";
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

    }

    public function readArticle(){
        
    }

    public function updateArticle(){
        
    }

    public function deleteArticle(){
        
    }
}