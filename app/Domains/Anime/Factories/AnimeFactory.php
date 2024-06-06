<?php

namespace App\Domains\Anime\Factories;

use App\Domains\Anime\Models\Anime;
use App\Domains\Anime\Models\DTOs\AnimeDTO;

class AnimeFactory
{
    public function createAnimeModel(): Anime
    {
        return new Anime();
    }

    public function animeDTOtoModel(Anime $anime, AnimeDTO $animeDTO): Anime
    {
        $anime->name = $animeDTO->getName();
        $anime->description = $animeDTO->getDescription();
        $anime->genres = $animeDTO->getGenres();
        $anime->originalName = $animeDTO->getOriginalName();
        $anime->link = $animeDTO->getLink();
        $anime->theme = $animeDTO->getTheme();
        $anime->mangaLink = $animeDTO->getMangaLink();

        return $anime;
    }
}
