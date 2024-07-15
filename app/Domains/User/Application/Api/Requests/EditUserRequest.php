<?php

namespace App\Domains\User\Application\Api\Requests;

/**
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 */
class EditUserRequest
{
    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:users,id'],
            'username' => ['nullable', 'string'],
            'email' => ['nullable', 'string'],
            'password' => ['nullable', 'string'],
        ];
    }
}
