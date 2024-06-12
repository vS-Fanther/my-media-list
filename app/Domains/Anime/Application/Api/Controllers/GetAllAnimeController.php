<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Application\Api\Requests\GetAllAnimeRequest;
use App\Domains\Anime\Services\GetAnimeService;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

class GetAllAnimeController extends Controller
{
    public function __construct(
        private readonly GetAnimeService $getAnimeService
    )
    {
    }

    public function getAllAnime(): Collection
    {
        return $this->getAnimeService->getAllAnime();
    }
}
