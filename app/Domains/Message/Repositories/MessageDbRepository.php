<?php

namespace App\Domains\Message\Repositories;

use App\Domains\Message\Models\Message;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class MessageDbRepository
{
    public function getMessagesForAnime(int $animeId): Collection
    {
        return Message::query()->where('anime_id', $animeId)->get();
    }

    public function getMessagesForUser(int $userId): Collection
    {
        return Message::query()->where('user_id', $userId)->get();
    }

    public function getMessagesByText(string $text): Collection
    {
        return Message::query()->where('message', 'like', '%' . $text . '%')->get();
    }

    public function addMessage(Message $message): Message
    {
        $message->save();
        return $message;
    }

    public function deleteMessage(int $messageId): bool {
        return $this->getMessageById($messageId)->delete();
    }

    public function updateMessage(Message $message): Message
    {
        $innerMessage = $this->getMessageById($message->id);
        $innerMessage->message = $message->message;
        $innerMessage->save();

        return $innerMessage;
    }

    public function getMessageById(int $messageId): Message
    {
        /** @var Message */
        return Message::query()->findOrFail($messageId);
    }
}
