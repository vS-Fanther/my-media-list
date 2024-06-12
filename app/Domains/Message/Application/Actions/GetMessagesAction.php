<?php

namespace App\Domains\Message\Application\Actions;

use App\Domains\Message\Models\DTOs\MessageDTO;
use App\Domains\Message\Repositories\MessageDbRepository;
use Illuminate\Database\Eloquent\Collection;

class GetMessagesAction
{
    public function __construct(
        private readonly MessageDbRepository $messageDbRepository
    ){
    }

    public function execute(MessageDTO $messageDTO): Collection
    {
        return $this->messageDbRepository->getMessagesForAnime($messageDTO->getAnimeId());
    }
}
