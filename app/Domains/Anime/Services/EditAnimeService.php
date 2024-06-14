<?php

namespace App\Domains\Anime\Services;

use App\Domains\Anime\Application\Actions\EditAnimeAction;
use App\Domains\Anime\Application\Api\Requests\EditAnimeRequest;
use App\Domains\Anime\Models\Anime;
use App\Domains\Anime\Models\DTOs\AnimeDTO;
use App\Domains\Anime\Models\DTOs\EditAnimeDTO;
use App\Domains\Anime\Repositories\AnimeDbRepository;

class EditAnimeService
{

    public function __construct(
        private readonly EditAnimeAction $editAnimeAction,
        private readonly AnimeDbRepository $animeDbRepository
    ){
    }

    public function editAnime(EditAnimeRequest $editAnimeRequest): Anime
    {
        $anime = $this->animeDbRepository->getAnimeById($editAnimeRequest->id);
        $editAnimeDTO = new EditAnimeDTO(
            $editAnimeRequest->id,
            $editAnimeRequest->name,
            $editAnimeRequest->description,
            $editAnimeRequest->genres,
            $editAnimeRequest->theme,
            $editAnimeRequest->originalName,
            $editAnimeRequest->link,
            $editAnimeRequest->mangaLink,
        );

        return $this->editAnimeAction->execute($editAnimeDTO, $anime);
    }
}
