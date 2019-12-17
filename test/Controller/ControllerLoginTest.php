<?php
declare(strict_types=1);

namespace SimpleMVC\Test\Controller;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Controller\ControllerLogin;
use SimpleMVC\Model\UserDb;


final class ControllerLoginTest extends TestCase
{
    public function setUp(): void
    {
        $this->userDb = $this->createMock(UserDb::class);
        $this->controller = new ControllerLogin($this->userDb);
        $this->request = $this->getMockBuilder(ServerRequestInterface::class)->getMock();
    }

    public function testCheckLoginEmpty(): void
    {
        
    }
}
