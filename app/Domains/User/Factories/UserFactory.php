<?php

namespace App\Domains\User\Factories;

use App\Domains\User\Models\User;

class UserFactory
{
    public function createUserModel(): User
    {
        return new User();
    }
}
