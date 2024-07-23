<?php

namespace App\Domains\User\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property $limit
 * @property $page
 */
class GetUsersRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'page' => ['required', 'integer', 'min:1'],
            'limit' => ['required', 'integer', 'min:10', 'max:100'],
        ];
    }
}
