<?php

namespace App\Domains\Anime\Factories;

use App\Domains\Anime\Models\Anime;

class AnimeFactory
{
    public function createAnimeModel(): Anime
    {
        return new Anime();
    }
}
