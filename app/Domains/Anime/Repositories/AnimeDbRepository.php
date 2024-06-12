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

    public function getAllAnime(): Collection
    {
        return Anime::all();
    }

    public function getAnimeByUserId(int $userId): Collection
    {
        return Anime::query()->where('user_id', $userId)->get();
    }

    public function getAnimeById(int $animeId): Anime
    {
        /** @var Anime */
        return Anime::query()->findOrFail($animeId);
    }
}

