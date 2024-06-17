<?php

namespace App\Domains\Message\Services;

use App\Domains\Message\Application\Actions\EditMessageAction;
use App\Domains\Message\Application\Api\Requests\EditMessageRequest;
use App\Domains\Message\Factories\MessageFactory;
use App\Domains\Message\Models\DTOs\EditMessageDTO;
use App\Domains\Message\Models\Message;
use App\Domains\Message\Repositories\MessageDbRepository;

class EditMessageService
{
    public function __construct(
        private readonly MessageDbRepository $messageDbRepository,
        private readonly EditMessageAction $editMessageAction
    ) {
    }

    public function editMessage(EditMessageRequest $editMessageRequest): Message
    {
        $message = $this->messageDbRepository->getMessageById($editMessageRequest->id);
        $editMessageDTO = new EditMessageDTO(
            $editMessageRequest->id,
            $editMessageRequest->message);
        return $this->editMessageAction->execute($message, $editMessageDTO);
    }
}
