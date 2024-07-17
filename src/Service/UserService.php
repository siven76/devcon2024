<?php

namespace App\Service;

class UserService
{
    private array $users = [
        'john_doe' => ['username' => 'john_doe', 'password' => 'password123'],
    ];

    public function getUserByUsername(string $username): ?array
    {
        return $this->users[$username] ?? null;
    }
}