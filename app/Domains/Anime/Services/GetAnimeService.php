<?php

namespace App\Domains\Anime\Services;

use App\Domains\Anime\Application\Api\Requests\GetAnimeRequest;
use App\Domains\Anime\Repositories\AnimeDbRepository;
use Illuminate\Database\Eloquent\Collection;

class GetAnimeService
{
    public function __construct(
        private readonly AnimeDbRepository $animeDbRepository
    ) {
    }

    public function getAllAnime(GetAnimeRequest $getAnimeRequest): Collection
    {
        return $this
            ->animeDbRepository
            ->getAnimesWithPaging(
                $getAnimeRequest->limit,
                $getAnimeRequest->page
            );
    }

    public function getAnimeByUserId(GetAnimeRequest $getAnimeByUserIdRequest): Collection
    {
        return $this->animeDbRepository->getAnimeByUserId($getAnimeByUserIdRequest->userId);
    }
}
