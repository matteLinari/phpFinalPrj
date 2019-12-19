<?php
declare(strict_types=1);

namespace SimpleMVC\Test\Controller;

use League\Plates\Engine;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Controller\Home;
use SimpleMVC\Model\ArticleDb;
use DI\ContainerBuilder;

final class HomeTest extends TestCase
{
    public function setUp(): void
    {
        $builder = new ContainerBuilder();
        $builder->addDefinitions('config/container.php');
        $this->container = $builder->build();
        $this->plates = new Engine('src/View');
        $this->home = new Home($this->plates, $this->container->get(ArticleDb::class));
        $this->request = $this->getMockBuilder(ServerRequestInterface::class)->getMock();
    }

    public function testExecuteRenderHomeView(): void
    {
        $test = $this->container->get(ArticleDb::class);
        $this->expectOutputString($this->plates->render('home',['articleList' => $test->getTodayArticle()]));
        $this->home->execute($this->request);
    }
}
