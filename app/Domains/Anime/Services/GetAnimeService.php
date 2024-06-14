<?php

namespace App\Domains\Anime\Services;

use App\Domains\Anime\Application\Api\Requests\GetAnimeByUserIdRequest;
use App\Domains\Anime\Repositories\AnimeDbRepository;
use Illuminate\Database\Eloquent\Collection;

class GetAnimeService
{
    public function __construct(
        private readonly AnimeDbRepository $animeDbRepository
    ) {
    }

    public function getAllAnime(): Collection
    {
        return $this->animeDbRepository->getAllAnime();
    }

    public function getAnimeByUserId(GetAnimeByUserIdRequest $getAnimeByUserIdRequest): Collection
    {
        return $this->animeDbRepository->getAnimeByUserId($getAnimeByUserIdRequest->userId);
    }
}
