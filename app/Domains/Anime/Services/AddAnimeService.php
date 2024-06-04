<?php

namespace App\Domains\Anime\Services;

use App\Domains\Anime\Application\Actions\AddAnimeAction;
use App\Domains\Anime\Application\Api\Requests\AddAnimeRequest;
use App\Domains\Anime\Models\DTOs\AddAnimeDTO;

class AddAnimeService
{
    public function __construct(
        private readonly AddAnimeAction $addAnimeAction
    ) {
    }

    public function addAnime(AddAnimeRequest $addAnimeRequest): void
    {
        $this->addAnimeAction->execute(new AddAnimeDTO(
            $addAnimeRequest->name
        ));
    }
}
