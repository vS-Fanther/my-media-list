<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Application\Api\Requests\EditAnimeRequest;
use App\Domains\Anime\Application\Api\Resources\AnimeResource;
use App\Domains\Anime\Services\EditAnimeService;
use App\Http\Controllers\Controller;

class EditAnimeController extends Controller
{
    public function __construct(
        private readonly EditAnimeService $editAnimeService
    ){
    }

    public function editAnime(EditAnimeRequest $editAnimeRequest): AnimeResource
    {
        $anime = $this->editAnimeService->editAnime($editAnimeRequest);
        return new AnimeResource($anime);
    }
}
