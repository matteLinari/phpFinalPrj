<?php

declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
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

        if (empty($email) || empty($password)) {
            header($_SERVER["SERVER_PROTOCOL"] . "422 ");
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
            header($_SERVER["SERVER_PROTOCOL"] . "401 Unauthorized");
            print("Accesso negato");
            header('location: /');
            
        }
        else{
            $_SESSION['user'] = $email;
            header('location: dashboard');
            
        }
    }

    public function execute(ServerRequestInterface $request)
    {
        session_start();
        $this->checkLogin($_POST["email"],$_POST["password"]);
        
    }
    

}
