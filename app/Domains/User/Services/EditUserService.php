<?php

namespace App\Domains\User\Services;

use App\Domains\User\Application\Actions\EditUserAction;
use App\Domains\User\Application\Api\Requests\EditUserRequest;
use App\Domains\User\Models\DTOs\EditUserDTO;
use App\Domains\User\Models\User;
use App\Domains\User\Repository\UserDbRepository;

class EditUserService
{
    public function __construct(
        private readonly UserDbRepository $userDbRepository,
        private readonly EditUserAction   $editUserAction
    )
    {
    }

    public function editUser(EditUserRequest $editUserRequest): User
    {
        $user = $this->userDbRepository->getUserById($editUserRequest->id);

        $editUserDTO = new EditUserDTO(
            $editUserRequest->id,
            $editUserRequest->username,
            $editUserRequest->password,
            $editUserRequest->email
        );

        return $this->editUserAction->editUser($editUserDTO, $user);
    }
}
