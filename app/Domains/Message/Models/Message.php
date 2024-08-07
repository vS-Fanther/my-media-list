<?php

namespace App\Domains\Message\Models;

use App\Domains\Message\Models\DTOs\MessageDTO;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property int $user_id
 * @property int $anime_id
 * @property string $message
 */
class Message extends Model
{
    protected $table = "messages";

    protected $fillable = ['id', 'message', '$user_id', '$anime_id'];

    public function fillFromDTO(MessageDTO $messageDTO): void
    {
        $this->message = $messageDTO->getMessage();
        $this->user_id = $messageDTO->getUserId();
        $this->anime_id = $messageDTO->getAnimeId();
    }
}
