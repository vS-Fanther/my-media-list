<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Application\Api\Requests\GetAnimeRequest;
use App\Domains\Anime\Services\GetAnimeService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetAnimeByUserIdController extends Controller
{
    public function __construct(
        private readonly GetAnimeService $getAnimeService
    ) {
    }

    public function getAnimeByUserId(GetAnimeRequest $getAnimeByUserIdRequest): ResourceCollection
    {
        $data = $this->getAnimeService->getAnimeByUserId($getAnimeByUserIdRequest);
        return new ResourceCollection($data);
    }
}
