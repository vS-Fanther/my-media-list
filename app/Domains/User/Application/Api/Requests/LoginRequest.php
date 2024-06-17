<?php

namespace App\Domains\User\Application\Api\Requests;


use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $email
 * @property string $password
 */
class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'password' => ['required', 'string'],
            'email' => ['required', 'email'],
        ];
    }
}
