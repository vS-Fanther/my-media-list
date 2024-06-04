<?php

namespace App\Domains\User\Services;

use App\Domains\User\Application\Actions\CreateUserAction;
use App\Domains\User\Application\Api\Requests\AddUserRequest;
use App\Domains\User\Models\DTOs\CreateUserDTO;

class CreateUserService
{
    public function __construct(
        private readonly CreateUserAction $createUserAction
    )
    {
    }

    public function execute(AddUserRequest $addUserRequest): void
    {
        $this->createUserAction->execute(new CreateUserDTO(
            $addUserRequest->username
            , $addUserRequest->email
            , $addUserRequest->password
        ));
    }
}
