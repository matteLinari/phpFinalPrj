<?php
declare(strict_types=1);

namespace SimpleMVC\Test\Controller;

use League\Plates\Engine;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Controller\Home;
use SimpleMVC\Model\ArticleDb;
use PDO;

final class HomeTest extends TestCase
{
    public function setUp(): void
    {
        $this->pdo = $this->createMock(PDO::class);
        $this->plates = new Engine('src/View');
        $this->articleDb = new ArticleDb($this->pdo);
        $this->home = new Home($this->plates, $this->articleDb);
        $this->request = $this->getMockBuilder(ServerRequestInterface::class)->getMock();
    }

    public function testExecuteRenderHomeView(): void
    {
        $this->expectOutputString($this->plates->render('home'));
        $this->home->execute($this->request);
    }
}
