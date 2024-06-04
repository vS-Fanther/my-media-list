<?php

namespace App\Domains\Anime\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 */
class AddAnimeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
        ];
    }
}
