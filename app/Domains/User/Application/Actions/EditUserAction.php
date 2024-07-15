<?php

namespace App\Domains\User\Application\Actions;

use App\Domains\User\Models\DTOs\EditUserDTO;
use App\Domains\User\Models\User;
use App\Domains\User\Repository\UserDbRepository;

class EditUserAction
{
    public function __construct(
        private readonly UserDbRepository $userDbRepository
    ) {
    }

    public function editUser(EditUserDTO $editUserDTO, User $user): User
    {
        $user->email = $editUserDTO->getEmail();
        $user->password = bcrypt($editUserDTO->getPassword());
        $user->username = $editUserDTO->getUsername();

        return $this->userDbRepository->save($user);
    }
}
