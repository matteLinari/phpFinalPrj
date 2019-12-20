<?php
declare(strict_types=1);

namespace SimpleMVC\Test\Controller;

use League\Plates\Engine;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Controller\Login;


final class LoginTest extends TestCase
{
    public function setUp(): void
    {
      
        $this->plates = new Engine('src/View');
        $this->login = new Login($this->plates);
        $this->request = $this->getMockBuilder(ServerRequestInterface::class)->getMock();
    }

    public function testExecuteRenderLoginView(): void
    {
        $this->expectOutputString($this->plates->render('login', ['msg' => '']));
        $this->login->execute($this->request);
    }
}
