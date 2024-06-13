<?php

namespace App\Domains\Message\Application\Api\Controllers;

use App\Domains\Message\Application\Api\Requests\GetAnimeMessagesRequest;
use App\Domains\Message\Application\Api\Requests\GetUserMessagesRequest;
use App\Domains\Message\Services\GetMessagesService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetMessagesByAnimeOrUserIdController extends Controller
{
    public function __construct(
        private readonly GetMessagesService $getMessagesService
    ){
    }

    public function getMessagesForAnime(GetAnimeMessagesRequest $getAnimeMessagesRequest): ResourceCollection
    {
        $data = $this->getMessagesService->getMessagesForAnime($getAnimeMessagesRequest);
        return new ResourceCollection($data);
    }

    public function getMessagesForUser(GetUserMessagesRequest $getUserMessagesRequest): ResourceCollection
    {
        $data = $this->getMessagesService->getMessagesForUser($getUserMessagesRequest);
        return new ResourceCollection($data);
    }
}
