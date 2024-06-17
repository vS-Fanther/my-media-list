<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Application\Api\Requests\GetAnimeByUserIdRequest;
use App\Domains\Anime\Services\GetAnimeService;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetAnimeByUserIdController
{
    public function __construct(
        private readonly GetAnimeService $getAnimeService
    ) {
    }

    public function getAnimeByUserId(GetAnimeByUserIdRequest $getAnimeByUserIdRequest): ResourceCollection
    {
        $data = $this->getAnimeService->getAnimeByUserId($getAnimeByUserIdRequest);
        return new ResourceCollection($data);
    }
}
