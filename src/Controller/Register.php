<?php

declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
<<<<<<< HEAD
use SimpleMVC\Model\UserDB;

class NewUser implements ControllerInterface
=======
use SimpleMVC\Model\UserDb;

class Register implements ControllerInterface
>>>>>>> 95dccd8e3a41a94e878d62459a1e31125ed82d6b
{
    protected $plates;
    protected $userDb;


<<<<<<< HEAD
    public function __construct(Engine $plates, UserDB $userDb)
=======
    public function __construct(Engine $plates, UserDb $userDb)
>>>>>>> 95dccd8e3a41a94e878d62459a1e31125ed82d6b
    {
        $this->plates = $plates;
        $this->userDb = $userDb;
    }

    public function execute(ServerRequestInterface $request)
    {
<<<<<<< HEAD
        if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['mail']) || empty($_POST['pass'])){
            echo $this->plates->render('register', ['msg' => 'Compila tutti i campi']);
            
        } else {
            $this->userDb->insertUser($_POST['name'], $_POST['surname'], $_POST['mail'], $_POST['password']);
            header('location: login');
=======
        if ($_SERVER['REQUEST_METHOD'] == 'GET') 
        {
            echo $this->plates->render('register');
        } 
        else 
        {
            if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['mail']) || empty($_POST['password'])) {
                echo $this->plates->render('register', ['msg' => 'Compila tutti i campi']);
                exit();
            }

            $this->controlLogin($_POST['mail']);
            
            $this->userDb->register($_POST['name'], $_POST['surname'], $_POST['mail'], $_POST['password']);
            header('location: dashboard');
        }
    }

    public function controlLogin($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $this->plates->render('register', ['msg' => 'Email non valida']);
            exit();
        }

        if (!$this->userDb->isUserNew($email)) {
            echo $this->plates->render('register', ['msg' => 'Utente già registrato']);
            exit();
>>>>>>> 95dccd8e3a41a94e878d62459a1e31125ed82d6b
        }
    }
}
