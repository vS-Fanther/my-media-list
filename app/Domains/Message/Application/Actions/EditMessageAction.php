<?php

namespace App\Domains\Message\Application\Actions;

use App\Domains\Message\Models\DTOs\EditMessageDTO;
use App\Domains\Message\Models\Message;
use App\Domains\Message\Repositories\MessageDbRepository;

class EditMessageAction
{
    public function __construct(
        private readonly MessageDbRepository $messageDbRepository
    ){
    }

    public function execute(Message $message, EditMessageDTO $editMessageDTO): Message
    {
        $message->message = $editMessageDTO->getMessage();

        return $this->messageDbRepository->save($message);
    }
}
