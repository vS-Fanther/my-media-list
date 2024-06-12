<?php

namespace App\Domains\User\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


/**
 * @property string $username
 * @property string $email
 * @property string $password
 */
class User extends Model
{
    use HasApiTokens;

    protected $hidden = [
        'password'
    ];

    public function getEmail(): string
    {
        return $this->email;
    }
}
