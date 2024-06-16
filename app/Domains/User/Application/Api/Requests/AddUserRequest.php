<?php

namespace App\Domains\User\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $username
 * @property string $email
 * @property string $password
 */
class AddUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
            'email' => ['required', 'email'],
        ];
    }
}
