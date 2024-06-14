<?php

namespace App\Domains\Anime\Models;

use App\Domains\Anime\Models\DTOs\AnimeDTO;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $genres
 * @property string $theme
 * @property string $original_name
 * @property string $link
 * @property string $manga_link
 * @property int $user_id
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
        $this->original_name = $animeDTO->getOriginalName();
        $this->link = $animeDTO->getLink();
        $this->theme = $animeDTO->getTheme();
        $this->manga_link = $animeDTO->getMangaLink();
        $this->user_id = $animeDTO->getUserId();
    }
}
