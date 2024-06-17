<?php

namespace App\Domains\User\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $email
 */
class LogoutRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
        ];
    }
}
