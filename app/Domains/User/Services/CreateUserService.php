<?php

namespace App\Domains\User\Services;

use App\Domains\User\Application\Actions\CreateUserAction;
use App\Domains\User\Application\Api\Requests\AddUserRequest;
use App\Domains\User\Models\DTOs\UserDTO;
use App\Domains\User\Models\User;

class CreateUserService
{
    public function __construct(
        private readonly CreateUserAction $createUserAction
    )
    {
    }

    public function execute(AddUserRequest $addUserRequest): User|null
    {
        return $this->createUserAction->execute(new UserDTO(
            $addUserRequest->username
            , $addUserRequest->email
            , $addUserRequest->password
        ));
    }
}
