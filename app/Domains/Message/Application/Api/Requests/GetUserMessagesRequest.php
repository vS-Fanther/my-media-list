<?php

namespace App\Domains\Message\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $userId
 */
class GetUserMessagesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'userId' => ['required', 'integer', 'exists:users,id'],
        ];
    }
}
