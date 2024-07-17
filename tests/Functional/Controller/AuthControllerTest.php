<?php

namespace App\Tests\Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthControllerTest extends WebTestCase
{
    public function testSuccessfulLogin()
    {
        $client = static::createClient();
        $client->request('POST', '/login', [
            'username' => 'john_doe',
            'password' => 'password123',
        ]);

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('body', 'Welcome, John!');
    }

    public function testFailedLogin()
    {
        $client = static::createClient();
        $client->request('POST', '/login', [
            'username' => 'john_doe',
            'password' => 'wrongpassword',
        ]);

        $this->assertResponseStatusCodeSame(401);
        $this->assertSelectorTextContains('body', 'Invalid credentials');
    }
}
