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
        $sth = $this->pdo->prepare("SELECT * FROM Article where DATE(InsDate)=CURDATE() order by InsDate DESC;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllArticle()
    {
        $sql = "SELECT * FROM Article order by InsDate DESC;";
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getArticle($id) {
        $sth = $this->pdo->prepare("SELECT * FROM Article where Id=:id");
        $sth->bindValue(':id', $id);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertArticle($title, $description, $content, $author)
    {
        $sql = "insert into Article(Title, Description, Content, Author, InsDate) values(:title, :description, :content, :author, CURRENT_TIMESTAMP())";
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(':title', $title);
        $sth->bindValue(':description', $description);
        $sth->bindValue(':content', $content);
        $sth->bindValue(':author', $author);
        $sth->execute();
    }

    public function modifyArticle($id, $title, $description, $content, $author)
    {
        $sql = "update Article set Title=:title, Description=:description, Content=:content, Author=:author, LastUpdate=CURRENT_TIMESTAMP() where Id=:id";
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(':id', $id);
        $sth->bindValue(':title', $title);
        $sth->bindValue(':description', $description);
        $sth->bindValue(':content', $content);
        $sth->bindValue(':author', $author);
        $sth->execute();
    }

    
}