<?php

namespace App\Domains\User\Models\DTOs;

class UserDTO
{
    public function __construct(
        private readonly string $username,
        private readonly string $email,
        private readonly string $password
    ) {
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}
