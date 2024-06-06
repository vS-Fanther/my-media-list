<?php

namespace App\Domains\Message\Application\Actions;

use App\Domains\Message\Factories\MessageFactory;
use App\Domains\Message\Models\DTOs\MessageDTO;
use App\Domains\Message\Repositories\MessageDbRepository;

class DeleteMessageAction
{
    public function __construct(
        private readonly MessageFactory      $messageFactory,
        private readonly MessageDbRepository $messageDbRepository
    )
    {
    }

    public function execute(MessageDTO $messageDTO): int
    {
        $message = $this->messageFactory->getMessageEntity();

        return $this->messageDbRepository->deleteMessage(
            $this->messageFactory->messageDTOToEntity($message, $messageDTO));
    }
}
