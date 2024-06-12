<?php

namespace App\Domains\Message\Services;

use App\Domains\Message\Application\Actions\GetMessagesAction;
use App\Domains\Message\Application\Api\Requests\GetMessagesRequest;
use App\Domains\Message\Models\DTOs\MessageDTO;
use Illuminate\Database\Eloquent\Collection;

class GetMessagesService
{
    public function __construct(
        private readonly GetMessagesAction $getMessagesAction
    )
    {
    }

    public function getMessages(GetMessagesRequest $getMessagesRequest): Collection
    {
        return $this->getMessagesAction->execute(new MessageDTO(
            $getMessagesRequest->userId,
            $getMessagesRequest->animeId,
            $getMessagesRequest->message,
        ));
    }
}
