<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticleDb;

class CrudArticle implements ControllerInterface
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
        if(!isset($_SESSION['user'])){
            header('Location: login');
            exit();
        }
        
        if(!isset($_GET['id']))
        {
            echo $this->plates->render('newArticle');
        }
        else if(isset($_GET['modifyId'])) 
        {
            $result = $this->articleDb->getArticle($_GET['id']);
            echo $this->plates->render('modifyArticle', ['article' => $result]);
        } 
        else if(isset($_GET['deleteId'])) {
            //$result = $this->articleDb->deleteArticle($_GET['id']);
            header('location: dashboard');
        }
        
    }
}
