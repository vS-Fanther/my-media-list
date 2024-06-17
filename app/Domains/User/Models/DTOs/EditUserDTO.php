<?php

namespace App\Domains\User\Models\DTOs;

/**
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 */
class EditUserDTO
{
    public function __construct(
        private readonly int    $id,
        private readonly string $username,
        private readonly string $password,
        private readonly string $email
    ) {
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
