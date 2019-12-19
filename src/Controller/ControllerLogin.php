<?php

declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use SimpleMVC\Model\UserDb;
use Psr\Http\Message\ServerRequestInterface;


class ControllerLogin implements ControllerInterface
{
    protected $plates;
    protected $userDb;

    public function __construct(Engine $plates,UserDb $userDb)
    {
        $this->userDb = $userDb;
        $this->plates = $plates;
    }

    public function checkLogin($email, $password)
    {
        if (empty($email) || empty($password)) {
            http_response_code(422);
            echo $this->plates->render('login', ['msg' => 'Compila tutti i campi']);
            exit();
        }

        /*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header($_SERVER["SERVER_PROTOCOL"] . "422 ");
            print("Email non valida");
            exit();
        }*/

        if(!$this->userDb->login($email, $password)) {
            header('location: 401');
            exit();
        }   
              
        $_SESSION['user'] = $email;
        header('location: dashboard');         
    }

    public function execute(ServerRequestInterface $request)
    {
        $this->checkLogin($_POST["email"],$_POST["password"]); 
    }
    

}
