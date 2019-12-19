<?php

declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\UserDB;

class NewUser implements ControllerInterface
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
        if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['mail']) || empty($_POST['pass'])){
            echo $this->plates->render('register', ['msg' => 'Compila tutti i campi']);
            
        } else {
            $this->userDb->insertUser($_POST['name'], $_POST['surname'], $_POST['mail'], $_POST['password']);
            header('location: login');
        }
    }
}
