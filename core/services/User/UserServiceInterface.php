<?php

namespace softuni\core\services\User;

use softuni\model\User;

interface UserServiceInterface
{
    public function register(User $user);

    public function login(string $username, string $password): bool;

    public function editProfile(User $user): bool;

    public function viewAll(): \Generator;

    public function isLogged(): bool;

    public function getCurrentUser(): User;

    public function getClassAttributeNames(User $user, string $exclude = null): string;
}