<?php

namespace App\Domains\Message\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $animeId
 */
class GetAnimeMessagesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'animeId' => ['required', 'integer', 'exists:anime,id'],
        ];
    }
}
