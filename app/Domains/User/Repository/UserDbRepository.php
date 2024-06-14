<?php

namespace App\Domains\User\Repository;

use App\Domains\User\Models\User;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\PersonalAccessToken;

class UserDbRepository
{
    public function save(User $user): bool
    {
        return $user->save();
    }

    public function getUser(User $user): PersonalAccessToken|null
    {
        $model = DB::table('users')->where('username', $user->username)->first();

        if (bcrypt($user->password) == $model->password) {
            return $user->createToken("token")->accessToken;
        } else {
            return null;
        }
    }
}
