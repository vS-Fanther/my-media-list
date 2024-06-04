<?php

namespace App\Domains\User\Repository;

use App\Domains\User\Models\User;

class AddUserDbRepository
{
    public function save(User $user): bool
    {
        return $user->save();
    }
}
