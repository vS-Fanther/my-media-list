<?php

namespace App\Domains\Message\Application\Actions;

use App\Domains\Message\Factories\MessageFactory;
use App\Domains\Message\Models\DTOs\MessageDTO;
use App\Domains\Message\Models\Message;
use App\Domains\Message\Repositories\MessageDbRepository;

class EditMessageAction
{
    public function __construct(
        private readonly MessageFactory $messageFactory,
        private readonly MessageDbRepository $messageDbRepository
    ){
    }

    public function execute(MessageDTO $messageDTO): Message
    {
        $message = $this->messageFactory->getMessageEntity();
        $message->fillFromDTO($messageDTO);

        return $this->messageDbRepository->updateMessage($message);
    }
}
