<?php

namespace App\Domains\Message\Factories;

use App\Domains\Message\Models\DTOs\MessageDTO;
use App\Domains\Message\Models\Message;

class MessageFactory
{
    public function getMessageEntity(): Message
    {
        return new Message();
    }

    public function messageDTOToEntity(Message $message, MessageDTO $messageDTO): Message
    {
        return $message;
    }
}
