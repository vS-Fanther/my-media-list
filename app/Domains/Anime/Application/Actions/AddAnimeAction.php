<?php

namespace App\Domains\Anime\Application\Actions;

use App\Domains\Anime\Factories\AnimeFactory;
use App\Domains\Anime\Models\DTOs\AddAnimeDTO;
use App\Domains\Anime\Repositories\AnimeDbRepository;

class AddAnimeAction
{
    public function __construct(
        private readonly AnimeFactory $animeFactory,
        private readonly AnimeDbRepository $animeDbRepository
    )
    {
    }

    public function execute(AddAnimeDTO $addAnimeDTO): void
    {
        $anime = $this->animeFactory->createAnimeModel();

        $anime->name = $addAnimeDTO->getName();

        $this->animeDbRepository->save($anime);
    }
}
