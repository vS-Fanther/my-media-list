<?php

namespace App\Domains\Anime\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $genres
 * @property string $theme
 * @property string $originalName
 * @property string $link
 * @property string $mangaLink
 */
class EditAnimeRequest extends FormRequest
{

}
