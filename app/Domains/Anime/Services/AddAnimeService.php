<?php

namespace App\Domains\Anime\Services;

use App\Domains\Anime\Application\Actions\AddAnimeAction;
use App\Domains\Anime\Application\Api\Requests\AddAnimeRequest;
use App\Domains\Anime\Models\Anime;
use App\Domains\Anime\Models\DTOs\AnimeDTO;

class AddAnimeService
{
    public function __construct(
        private readonly AddAnimeAction $addAnimeAction
    ) {
    }

    public function addAnime(AddAnimeRequest $addAnimeRequest): Anime
    {
        return $this->addAnimeAction->execute(new AnimeDTO(
            $addAnimeRequest->name,
            $addAnimeRequest->description,
            $addAnimeRequest->genres,
            $addAnimeRequest->theme,
            $addAnimeRequest->originalName,
            $addAnimeRequest->link,
            $addAnimeRequest->mangaLink,
            $addAnimeRequest->userId
        ));
    }
}
