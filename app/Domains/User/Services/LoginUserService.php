<?php

namespace App\Domains\User\Services;

use App\Domains\User\Application\Actions\CreateUserAction;
use App\Domains\User\Application\Api\Requests\LoginRequest;
use App\Domains\User\Application\Api\Resources\LoginResource;
use App\Domains\User\Repository\UserDbRepository;
use Illuminate\Http\Response;

class LoginUserService
{
    public function __construct(
        private readonly UserDbRepository $userDbRepository
    )
    {
    }

    public function loginUser(LoginRequest $loginRequest): LoginResource
    {
        $user = $this->userDbRepository->getUserByEmail($loginRequest->email);
        if (! $user) {
            return new LoginResource(
                Response::HTTP_BAD_REQUEST,
                'User not found',
            );
        }
        if (! password_verify($loginRequest->password, $user->password)) {
            return new LoginResource(
                Response::HTTP_BAD_REQUEST,
                'Wrong password',
            );
        }
        return new LoginResource(
            Response::HTTP_OK,
            'Logged in successfully',
            $user
        );
    }
}
