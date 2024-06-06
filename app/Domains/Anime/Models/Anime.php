<?php

namespace App\Domains\Anime\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $description
 * @property array $genres
 * @property string $theme
 * @property string $originalName
 * @property string $link
 * @property string $mangaLink
 */
class Anime extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'anime';

}
