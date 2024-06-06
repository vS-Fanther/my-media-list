<?php

namespace App\Domains\Message\Application\Actions;

use App\Domains\Message\Models\DTOs\MessageDTO;

class DeleteMessageService
{
    public function __construct(
        private readonly DeleteMessageAction $deleteMessageAction
    )
    {
    }

    public function deleteMessage(DeleteMessageRequest $deleteMessageRequest): int
    {
        return $this->deleteMessageAction->execute(new MessageDTO(
            $deleteMessageRequest->userId,
            $deleteMessageRequest->animeId,
            $deleteMessageRequest->message,
        ));
    }
}
