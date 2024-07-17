<?php

namespace App\Tests\Integration\Service;

use App\Service\AuthService;
use App\Service\UserService;
use PHPUnit\Framework\TestCase;

class AuthServiceTest extends TestCase
{
    public function testLogin()
    {
        $userService = new UserService();
        $authService = new AuthService($userService);

        $result = $authService->login('john_doe', 'password12');

        $this->assertTrue($result);
    }

    public function testFailedLogin()
    {
        $userService = new UserService();
        $authService = new AuthService($userService);

        $result = $authService->login('john_doe', 'wrongpassword');

        $this->assertFalse($result);
    }
}