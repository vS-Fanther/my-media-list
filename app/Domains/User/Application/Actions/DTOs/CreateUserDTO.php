<?php

namespace App\Domains\User\Application\Actions\DTOs;

use App\Modules\Auth\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class CreateUserDTO
{
    public function __construct(
        private readonly string $email,
        private readonly string $password,
        private readonly string $username
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

    /**
     * @param  Request  $request
     * @return static
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            $request->email,
            $request->password,
            $request->username
        );
    }
}
