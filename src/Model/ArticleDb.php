<?php
declare(strict_types=1);

namespace SimpleMVC\Model;
use PDO;

class ArticleDb {

    protected $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }
    
    public function getArticleList() : array {
        $sth = $this->pdo->prepare("SELECT id, title, description FROM Article where DATE(releaseDate)=CURDATE();");
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
}