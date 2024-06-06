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
}
