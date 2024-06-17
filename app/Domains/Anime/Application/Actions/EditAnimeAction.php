<?php

namespace App\Domains\Anime\Application\Actions;

use App\Domains\Anime\Factories\AnimeFactory;
use App\Domains\Anime\Models\Anime;
use App\Domains\Anime\Models\DTOs\EditAnimeDTO;
use App\Domains\Anime\Repositories\AnimeDbRepository;

class EditAnimeAction
{
    public function __construct(
        private readonly AnimeDbRepository $animeDbRepository
    ) {
    }

    public function execute(EditAnimeDTO $editAnimeDTO, Anime $anime): Anime
    {
        $anime->name = $editAnimeDTO->getName();
        $anime->description = $editAnimeDTO->getDescription();
        $anime->genres = $editAnimeDTO->getGenres();
        $anime->original_name = $editAnimeDTO->getOriginalName();
        $anime->link = $editAnimeDTO->getLink();
        $anime->theme = $editAnimeDTO->getTheme();
        $anime->manga_link = $editAnimeDTO->getMangaLink();

        $this->animeDbRepository->save($anime);
        return $anime;
    }
}
