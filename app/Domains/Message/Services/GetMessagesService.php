<?php

namespace App\Domains\Message\Services;

use App\Domains\Message\Application\Api\Requests\GetAnimeMessagesRequest;
use App\Domains\Message\Application\Api\Requests\GetMessagesByTextRequest;
use App\Domains\Message\Application\Api\Requests\GetUserMessagesRequest;
use App\Domains\Message\Repositories\MessageDbRepository;
use Illuminate\Database\Eloquent\Collection;

class GetMessagesService
{
    public function __construct(
        private readonly MessageDbRepository $messageDbRepository
    )
    {
    }

    public function getMessagesForAnime(GetAnimeMessagesRequest $getAnimeMessagesRequest): Collection
    {
        return $this->messageDbRepository->getMessagesForAnime($getAnimeMessagesRequest->animeId);
    }

    public function getMessagesForUser(GetUserMessagesRequest $getUserMessagesRequest): Collection
    {
        return $this->messageDbRepository->getMessagesForUser($getUserMessagesRequest->userId);
    }

    public function getMessagesByText(GetMessagesByTextRequest $getMessagesByTextRequest): Collection
    {
        return $this->messageDbRepository->getMessagesByText($getMessagesByTextRequest->message);
    }
}
