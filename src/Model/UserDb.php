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

    public function newUser($name, $surname, $mail, $pass){

        $sql = "insert into User(Name, Surname, Mail, Pass, SigningDate) values(:name, :surname, :mail, :pass, CURRENT_TIMESTAMP())";
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(':name', $name);
        $sth->bindValue(':surname', $surname);
        $sth->bindValue(':mail', $mail);
        $sth->bindValue(':pass', $pass);
        $sth->execute();
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
}


          