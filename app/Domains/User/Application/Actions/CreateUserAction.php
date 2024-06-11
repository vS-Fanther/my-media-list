<?php

namespace App\Domains\User\Application\Actions;

use App\Domains\User\Factories\UserFactory;
use App\Domains\User\Models\DTOs\UserDTO;
use App\Domains\User\Models\User;
use App\Domains\User\Repository\UserDbRepository;

class CreateUserAction
{

    public function __construct(
        private readonly UserFactory $userFactory,
        private readonly UserDbRepository $addUserDbRepository
    ){
    }

    public function execute(UserDTO $createUserDTO): User|null
    {
        $user = $this->userFactory->createUserModel();

        $user->username = $createUserDTO->getUsername();
        $user->email = $createUserDTO->getEmail();
        $user->password = bcrypt($createUserDTO->getPassword());

        $this->addUserDbRepository->save($user);
        return $user;
    }
}
