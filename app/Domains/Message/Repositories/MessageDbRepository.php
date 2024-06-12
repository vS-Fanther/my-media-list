<?php

namespace App\Domains\Message\Repositories;

use App\Domains\Message\Models\Message;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class MessageDbRepository
{
    public function getMessagesForAnime(int $animeId): Collection
    {
        return Message::all();
    }

    public function addMessage(Message $message): Message
    {
        $message->save();
        return $message;
    }

    public function deleteMessage(Message $message): int {
        $message->delete();
        return $message->id;
    }

    public function updateMessage(Message $message): Message
    {
        DB::table('messages')->where('id', $message->id)->update($message->toArray());
        return $message;
    }
}
