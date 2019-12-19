<?php
declare(strict_types=1);

namespace SimpleMVC\Test\Controller;

use League\Plates\Engine;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Controller\Error401;

final class Error401Test extends TestCase
{
    public function setUp(): void
    {
        $this->plates = new Engine('src/View');
        $this->error = new Error401($this->plates);
        $this->request = $this->getMockBuilder(ServerRequestInterface::class)->getMock();
    }

    public function testExecuteRender401View(): void
    {
        $this->expectOutputString($this->plates->render('401'));
        $this->error->execute($this->request);

        $this->assertEquals(401, http_response_code());
    }
}
