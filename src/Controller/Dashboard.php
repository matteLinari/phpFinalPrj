<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticleDb;

class Dashboard implements ControllerInterface
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
        
        $result = $this->articleDb->getAllArticle();
        echo $this->plates->render('dashboard', ['articleList' => $result]);
    }
}
