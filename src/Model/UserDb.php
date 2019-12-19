<?php
declare(strict_types=1);

namespace SimpleMVC\Model;

use PDO;

class UserDb
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function login($email, $password)
    {
        $sql = 'select Mail from User where Mail = :email and Pass=:password';
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(':email', $email);
        $sth->bindValue(':password', $password);
        $sth->execute();

        //$result = $sth->fetchAll(PDO::FETCH_ASSOC);
        $count = $sth->rowCount();

        if ($count == 0) {
            return false;
            
        } else {
           return true;
        }
    }

    public function isUserNew($email)
    {
        $sql = 'select Mail from User where Mail = :email';
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(':email', $email);
        $sth->execute();
        $count = $sth->rowCount();

        if ($count == 0) {
            return true;
            
        } else {
           return false;
        }
    }

    public function register($name, $surname, $mail, $pass)
    {
        $sql = "insert into User(Name, Surname, Mail, Pass, SigningDate) values(:name, :surname, :mail, :pass, CURRENT_TIMESTAMP())";
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(':name', $name);
        $sth->bindValue(':surname', $surname);
        $sth->bindValue(':mail', $mail);
        $sth->bindValue(':pass', $pass);
        $sth->execute();
    }
}


          