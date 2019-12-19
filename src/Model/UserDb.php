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
        $sql = 'select Mail, Pass from User where Mail = :email';// and Pass=:password;
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(':email', $email);
        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        $count = $sth->rowCount();     
            
        echo($result[Pass]);
        //comparePWD is a boolean
        $comparePWD = password_verify($password, $result[Pass]);

        if ($count == 0) {
            return false;
            
        } else if($comparePWD){
           return true; //password is correct
        }
    }

    public function getPassword($email, $password) {
        $query = 'SELECT Pass FROM User where Mail=:email and Pass=:pass';
        $sth = $this->pdo->prepare($query);
        $sth->bindValue(':pass', $password);
        $sth->bindValue(':email', $email);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
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
        $sth->bindValue(':pass', password_hash($pass, PASSWORD_DEFAULT));
        $sth->execute();
    }
}


          