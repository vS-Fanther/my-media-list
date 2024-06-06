<?php

namespace App\Domains\Anime\Application\Actions;

use App\Domains\Anime\Factories\AnimeFactory;
use App\Domains\Anime\Models\DTOs\AnimeDTO;
use App\Domains\Anime\Repositories\AnimeDbRepository;
use Illuminate\Database\Eloquent\Collection;

class GetAnimeAction
{
    public function __construct(
        private readonly AnimeFactory $animeFactory,
        private readonly AnimeDbRepository $animeDbRepository
    ) {
    }

    public function execute(AnimeDTO $animeDTO): Collection
    {
        $anime = $this->animeFactory->createAnimeModel();
        $anime = $this->animeFactory->animeDTOtoModel($anime, $animeDTO);

        return $this->animeDbRepository->find($anime);
    }

}
