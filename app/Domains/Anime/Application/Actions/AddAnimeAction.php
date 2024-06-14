<?php

namespace App\Domains\Anime\Application\Actions;

use App\Domains\Anime\Factories\AnimeFactory;
use App\Domains\Anime\Models\Anime;
use App\Domains\Anime\Models\DTOs\AnimeDTO;
use App\Domains\Anime\Repositories\AnimeDbRepository;

class AddAnimeAction
{
    public function __construct(
        private readonly AnimeFactory $animeFactory,
        private readonly AnimeDbRepository $animeDbRepository
    )
    {
    }

    public function execute(AnimeDTO $animeDTO): Anime
    {
        $anime = $this->animeFactory->createAnimeModel();
        $anime->fillFromDTO($animeDTO);

        $this->animeDbRepository->save($anime);

        return $anime;
    }
}
