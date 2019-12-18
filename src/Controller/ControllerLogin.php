<?php

declare(strict_types=1);

namespace SimpleMVC\Controller;

use SimpleMVC\Model\UserDb;
use Psr\Http\Message\ServerRequestInterface;


class ControllerLogin implements ControllerInterface
{
    
    protected $userDb;

    public function __construct(UserDb $userDb)
    {
        $this->userDb = $userDb;
    }

    public function checkLogin($email, $password)
    {
        session_start();

        if (empty($email) || empty($password)) {
            http_response_code(422);
            print("Email o Passwod mancanti");
            header('location: /');
            exit();
        }

        /*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header($_SERVER["SERVER_PROTOCOL"] . "422 ");
            print("Email non valida");
            exit();
        }*/

        if(!$this->userDb->login($email, $password)) {
            http_response_code(401);
            print("Accesso negato");
            header('location: /');
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
