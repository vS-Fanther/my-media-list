<?php

namespace App\Domains\Anime\Services;

use App\Domains\Anime\Application\Actions\GetAnimeAction;
use App\Domains\Anime\Application\Api\Requests\GetAnimeRequest;
use App\Domains\Anime\Models\DTOs\AnimeDTO;
use Illuminate\Database\Eloquent\Collection;

class GetAnimeService
{
    public function __construct(
        private readonly GetAnimeAction $getAnimeAction
    ) {
    }

    public function getAnime(GetAnimeRequest $addAnimeRequest): Collection
    {
        return $this->getAnimeAction->execute(new AnimeDTO(
            $addAnimeRequest->name,
            $addAnimeRequest->description,
            $addAnimeRequest->genres,
            $addAnimeRequest->theme,
            $addAnimeRequest->originalName,
            $addAnimeRequest->link,
            $addAnimeRequest->mangaLink
        ));
    }
}
