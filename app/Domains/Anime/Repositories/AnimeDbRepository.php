<?php

namespace App\Domains\Anime\Repositories;

use App\Domains\Anime\Models\Anime;
use Illuminate\Database\Eloquent\Collection;

class AnimeDbRepository
{
    public function save(Anime $anime): bool
    {
        return $anime->save();
    }

    public function find(Anime $anime): Collection
    {
        return Anime::all();
    }
}

