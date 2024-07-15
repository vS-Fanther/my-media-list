<?php

namespace App\Domains\User\Repository;

use App\Domains\User\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserDbRepository
{
    public function save(User $user): User
    {
        $user->save();
        return $user;
    }

    public function getUserByEmail(string $email): ?User
    {
        /** @var User */
        return User::query()->where('email', $email)->first();
    }

    public function getUserById(int $id): User
    {
        /** @var User */
        return User::query()->where('id', $id)->first();
    }

    public function getUsersWithPaging(int $limit, int $page): Collection
    {
        return User::query()
            ->offset($limit * ($page - 1))
            ->limit($limit)
            ->get();
    }
}
