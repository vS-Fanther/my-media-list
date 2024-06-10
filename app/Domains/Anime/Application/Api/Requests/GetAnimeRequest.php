<?php

namespace App\Domains\Anime\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $description
 * @property array $genres
 * @property string $theme
 * @property string $originalName
 * @property string $link
 * @property string $mangaLink
 * @property int $userId
 */
class GetAnimeRequest extends FormRequest
{

}
