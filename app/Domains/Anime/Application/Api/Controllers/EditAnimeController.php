<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Application\Api\Requests\EditAnimeRequest;
use App\Domains\Anime\Models\Anime;
use App\Domains\Anime\Services\EditAnimeService;
use App\Http\Controllers\Controller;

class EditAnimeController extends Controller
{
    public function __construct(
        private readonly EditAnimeService $editAnimeService
    ){
    }

    public function editAnime(EditAnimeRequest $request): Anime
    {
        return $this->editAnimeService->editAnime($request);
    }
}
