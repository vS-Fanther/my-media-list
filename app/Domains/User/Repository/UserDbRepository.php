<?php

namespace App\Domains\User\Repository;

use App\Domains\User\Models\User;
use Illuminate\Support\Facades\DB;

class UserDbRepository
{
    public function save(User $user): bool
    {
        return $user->save();
    }

    public function getUser(User $user): void
    {
        $model = DB::table('users')->where('username', $user->username)->first();

        if (bcrypt($user->password) == $model->password) {
            // Пароль верный
            //todo TOken or smth
        }
    }
}
