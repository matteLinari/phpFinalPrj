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
        if(!isset($_GET['id'])){
           echo $this->plates->render('newArticle');
        } else {
            $result = $this->articleDb->getArticle($_GET['id']);
            echo $this->plates->render('crudArticle', ['article' => $result]);
        }
        
    }
}
