<?php

namespace App\Domains\User\Services;

use App\Domains\User\Application\Api\Requests\LoginRequest;
use App\Domains\User\Application\Api\Requests\LogoutRequest;
use App\Domains\User\ErrorHandling\UserNotFoundException;
use App\Domains\User\ErrorHandling\WrongPasswordException;
use App\Domains\User\Models\User;
use App\Domains\User\Repository\UserDbRepository;

class AuthService
{
    public function __construct(
        private readonly UserDbRepository $userDbRepository
    ) {
    }

    /**
     * @throws WrongPasswordException
     * @throws UserNotFoundException
     */
    public function loginUser(LoginRequest $loginRequest): User
    {
        $user = $this->userDbRepository->getUserByEmail($loginRequest->email);
        if (! $user) {
            throw new UserNotFoundException();
        }
        if (! password_verify($loginRequest->password, $user->password)) {
            throw new WrongPasswordException();
        }
        return $user;
    }

    public function logout(LogoutRequest $logoutRequest): void
    {
        $user = $this->userDbRepository->getUserByEmail($logoutRequest->email);
        $user->tokens()->delete();
    }
}
