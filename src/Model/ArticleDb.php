<?php
declare(strict_types=1);

namespace SimpleMVC\Model;
use PDO;

class ArticleDb {

    protected $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }
    
    public function getTodayArticle() : array {
        $sth = $this->pdo->prepare("SELECT id, title, description FROM Article where DATE(releaseDate)=CURDATE() order by releaseDate DESC;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllArticle()
    {
        $sql = "SELECT * FROM Article order by releaseDate DESC;";
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getArticle($id) {
        $sth = $this->pdo->prepare("SELECT title, description, content FROM Article where id=:id");
        $sth->bindValue(':id', $id);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
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

    
}