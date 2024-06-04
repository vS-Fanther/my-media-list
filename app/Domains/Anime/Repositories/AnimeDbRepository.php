<?php

namespace App\Domains\Anime\Repositories;

use App\Domains\Anime\Models\Anime;

class AnimeDbRepository
{
    public function save(Anime $anime): bool
    {
        return $anime->save();
    }
}

