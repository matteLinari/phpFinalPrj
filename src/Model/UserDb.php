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
        $sql = 'select email from User where email = :email and password=:password';
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


          