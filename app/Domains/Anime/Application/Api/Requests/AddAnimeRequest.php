<?php

namespace App\Domains\Anime\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $description
 * @property string $genres
 * @property string $theme
 * @property string $originalName
 * @property string $link
 * @property string $mangaLink
 * @property int $userId
 */
class AddAnimeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'userId' => ['required', 'integer', 'exists:users,id'],
        ];
    }
}
