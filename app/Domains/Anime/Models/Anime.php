<?php

namespace App\Domains\Anime\Models;

use App\Domains\Anime\Models\DTOs\AnimeDTO;
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

    public function fillFromDTO(AnimeDTO $animeDTO): void
    {
        $this->name = $animeDTO->getName();
        $this->description = $animeDTO->getDescription();
        $this->genres = $animeDTO->getGenres();
        $this->originalName = $animeDTO->getOriginalName();
        $this->link = $animeDTO->getLink();
        $this->theme = $animeDTO->getTheme();
        $this->mangaLink = $animeDTO->getMangaLink();
    }
}
