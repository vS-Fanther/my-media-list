<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Application\Api\Requests\GetAnimeRequest;
use App\Domains\Anime\Services\GetAnimeService;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

class GetAnimeController extends Controller
{
    public function __construct(
        private readonly GetAnimeService $getAnimeService
    )
    {
    }

    public function getAnime(GetAnimeRequest $getAnimeRequest): Collection
    {
        return $this->getAnimeService->getAnime($getAnimeRequest);
    }
}
