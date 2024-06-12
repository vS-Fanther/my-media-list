<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Application\Api\Requests\AddAnimeRequest;
use App\Domains\Anime\Models\Anime;
use App\Domains\Anime\Services\AddAnimeService;
use App\Http\Controllers\Controller;


class AddAnimeController extends Controller
{
    public function __construct(
        private readonly AddAnimeService $addAnimeService
    ){
    }

    public function addAnime(AddAnimeRequest $addAnimeRequest): Anime
    {
        return $this->addAnimeService->addAnime($addAnimeRequest);
    }
}
