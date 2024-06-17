<?php

namespace App\Domains\Message\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $messageId
 */
class DeleteMessageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'messageId' => ['required', 'integer', 'exists:messages,id'],
        ];
    }
}
