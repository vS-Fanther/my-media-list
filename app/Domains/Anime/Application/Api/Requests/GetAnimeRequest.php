<?php

namespace App\Domains\Anime\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $userId
 * @property int $page
 * @property int $limit
 */
class GetAnimeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'userId' => ['nullable', 'integer', 'exists:users,id'],
            'page' => ['required', 'integer', 'min:1'],
            'limit' => ['required', 'integer', 'min:10', 'max:100'],
        ];
    }
}
