<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Application\Api\Requests\GetAnimeRequest;
use App\Domains\Anime\Services\GetAnimeService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetAllAnimeController extends Controller
{
    public function __construct(
        private readonly GetAnimeService $getAnimeService
    ) {
    }

    public function getAllAnime(GetAnimeRequest $getAnimeRequest): ResourceCollection
    {
        $data = $this->getAnimeService->getAllAnime($getAnimeRequest);
        return new ResourceCollection($data);
    }
}
