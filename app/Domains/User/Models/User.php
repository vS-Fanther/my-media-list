<?php

namespace App\Domains\User\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


/**
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 */
class User extends Model
{
    use HasApiTokens;

    public const TOKEN_NAME = 'api_token';

    protected $hidden = [
        'password'
    ];

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getToken(): string
    {
        return $this->createToken(self::TOKEN_NAME)->plainTextToken;
    }
}
