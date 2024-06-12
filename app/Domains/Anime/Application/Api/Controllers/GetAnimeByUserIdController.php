<?php

namespace App\Domains\Anime\Application\Api\Controllers;

use App\Domains\Anime\Application\Api\Requests\GetAnimeByUserIdRequest;
use App\Domains\Anime\Services\GetAnimeService;
use Illuminate\Database\Eloquent\Collection;

class GetAnimeByUserIdController
{
    public function __construct(
        private readonly GetAnimeService $getAnimeService
    ){
    }

    public function getAnimeByUserId(GetAnimeByUserIdRequest $getAnimeByUserIdRequest): Collection
    {
        return $this->getAnimeService->getAnimeByUserId($getAnimeByUserIdRequest);
    }
}
