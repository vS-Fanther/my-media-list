<?php

namespace App\Domains\Message\Application\Actions;

use App\Domains\Message\Models\DTOs\MessageDTO;
use App\Domains\Message\Models\Message;

class EditMessageService
{
    public function __construct(
        private readonly EditMessageAction $editMessageAction
    )
    {
    }

    public function editMessage(EditMessageRequest $editMessageRequest): Message
    {
        return $this->editMessageAction->execute(new MessageDTO(
            $editMessageRequest->userId,
            $editMessageRequest->animeId,
            $editMessageRequest->message,
        ));
    }
}
