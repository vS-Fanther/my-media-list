<?php

namespace App\Domains\Message\Application\Actions;

class DeleteMessageController
{
    public function __construct(
        private readonly DeleteMessageService $deleteMessageService
    ){
    }

    public function deleteMessage(DeleteMessageRequest $deleteMessageRequest): int
    {
        return $this->deleteMessageService->deleteMessage($deleteMessageRequest);
    }
}
