<?php

namespace App\Domains\User\Repository;

use App\Domains\User\Models\User;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\PersonalAccessToken;

class UserDbRepository
{
    public function save(User $user): User
    {
        $user->save();
        return $user;
    }

    public function getUserByEmail(string $email): User
    {
        /** @var User */
        return DB::table('users')->where('email', $email)->first();
    }

    public function getUserById(int $id): User
    {
        /** @var User */
        return DB::table('users')->where('id', $id)->first();
    }
}
