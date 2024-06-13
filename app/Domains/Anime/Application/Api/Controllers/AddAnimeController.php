<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Application\Api\Requests\AddAnimeRequest;
use App\Domains\Anime\Application\Api\Resources\AnimeResource;
use App\Domains\Anime\Services\AddAnimeService;
use App\Http\Controllers\Controller;


class AddAnimeController extends Controller
{
    public function __construct(
        private readonly AddAnimeService $addAnimeService
    ){
    }

    public function addAnime(AddAnimeRequest $addAnimeRequest): AnimeResource
    {
        $anime = $this->addAnimeService->addAnime($addAnimeRequest);
        return new AnimeResource($anime);
    }
}
