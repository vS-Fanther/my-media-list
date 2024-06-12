<?php

namespace App\Domains\Message\Application\Api\Controllers;

use App\Domains\Message\Application\Api\Requests\GetAnimeMessagesRequest;
use App\Domains\Message\Services\GetMessagesService;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

class GetMessagesForAnimeController extends Controller
{
    public function __construct(
        private readonly GetMessagesService $getMessagesService
    ){
    }

    public function getMessagesForAnime(GetAnimeMessagesRequest $getMessagesRequest): Collection
    {
        return $this->getMessagesService->getMessagesForAnime($getMessagesRequest);
    }
}
