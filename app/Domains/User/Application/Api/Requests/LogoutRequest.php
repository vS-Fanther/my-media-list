<?php

namespace App\Domains\User\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $id
 */
class LogoutRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id' => ['required', 'integer'],
        ];
    }
}
