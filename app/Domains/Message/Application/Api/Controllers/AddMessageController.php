<?php

namespace App\Domains\Message\Application\Actions;

use App\Domains\Message\Models\Message;

class AddMessageController
{
    public function __construct(
        private readonly AddMessageService $addMessageService
    ){
    }

    public function addMessage(AddMessageRequest $addMessageRequest): Message
    {
        return $this->addMessageService->addMessage($addMessageRequest);
    }
}
