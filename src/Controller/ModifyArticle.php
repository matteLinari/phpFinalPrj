<?php

declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticleDb;

class ModifyArticle implements ControllerInterface
{
    protected $plates;
    protected $articleDb;


    public function __construct(Engine $plates, ArticleDb $articleDb)
    {
        $this->plates = $plates;
        $this->articleDb = $articleDb;
    }

    public function execute(ServerRequestInterface $request)
    {
        if(empty($_POST['title']) || empty($_POST['description']) || empty($_POST['content']) || empty($_POST['author'])){
            echo($this->plates->render('modifyArticle'));
            
        } else {
            //$this->articleDb->modifyArticle($_POST['id'], $_POST['title'], $_POST['description'], $_POST['content'], $_POST['author']);
            header('location: dashboard');
        }
    }
}
