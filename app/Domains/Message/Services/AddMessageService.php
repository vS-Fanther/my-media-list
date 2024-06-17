<?php

namespace App\Domains\Message\Services;

use App\Domains\Message\Application\Actions\AddMessageAction;
use App\Domains\Message\Application\Api\Requests\AddMessageRequest;
use App\Domains\Message\Models\DTOs\MessageDTO;
use App\Domains\Message\Models\Message;

class AddMessageService
{
    public function __construct(
        private readonly AddMessageAction $addMessageAction
    ) {
    }

    public function addMessage(AddMessageRequest $addMessageRequest): Message
    {
        return $this->addMessageAction->execute(new MessageDTO(
            $addMessageRequest->userId,
            $addMessageRequest->animeId,
            $addMessageRequest->message,
        ));
    }
}
