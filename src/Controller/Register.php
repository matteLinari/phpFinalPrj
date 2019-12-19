<?php

declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\UserDb;

class Register implements ControllerInterface
{
    protected $plates;
    protected $userDb;

    public function __construct(Engine $plates, UserDB $userDb)

    {
        $this->plates = $plates;
        $this->userDb = $userDb;
    }

    public function execute(ServerRequestInterface $request)
    {
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

        if (!$this->userDb->isUserNew($email)) { //utente già registrato
            echo $this->plates->render('register', ['msg' => 'Dati inseriti errati, prova con un\'altra mail.']); 
            exit();
        }
    }
}
