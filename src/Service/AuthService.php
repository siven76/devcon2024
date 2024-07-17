<?php

namespace App\Service;

class AuthService
{
    public function __construct(private readonly UserService $userService)
    {
    }

    public function login(string $username, string $password): bool
    {
        $user = $this->userService->getUserByUsername($username);

        return $user && $user['password'] === $password;
    }
}