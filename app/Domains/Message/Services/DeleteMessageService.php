<?php

namespace App\Domains\Message\Services;

use App\Domains\Message\Application\Api\Requests\DeleteMessageRequest;
use App\Domains\Message\Repositories\MessageDbRepository;

class DeleteMessageService
{
    public function __construct(
        private readonly MessageDbRepository $messageDbRepository
    ) {
    }

    public function deleteMessage(DeleteMessageRequest $deleteMessageRequest): int
    {
        return $this->messageDbRepository->deleteMessage($deleteMessageRequest->messageId);
    }
}
