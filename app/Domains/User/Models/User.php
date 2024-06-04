<?php

namespace App\Domains\User\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property string $username
 * @property string $email
 * @property string $password
 */
class User extends Model
{

    protected $hidden = [
        'password'
    ];

    public function getEmail(): string
    {
        return $this->email;
    }
}
