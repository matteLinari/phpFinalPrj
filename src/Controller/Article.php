<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;


use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticleDb;

class Article implements ControllerInterface
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
        $result = $this->articleDb->getArticle($_GET['id']);
        echo $this->plates->render('article', ['article' => $result]);
    }
}
