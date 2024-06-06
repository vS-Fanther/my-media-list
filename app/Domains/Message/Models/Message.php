<?php

namespace App\Domains\Message\Models;

use App\Domains\Message\Models\DTOs\MessageDTO;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property int $userId
 * @property int $animeId
 * @property string $message
 */
class Message extends Model
{
    protected $table = "messages";

    public function fillFromDTO(MessageDTO $messageDTO): void
    {
        $this->message = $messageDTO->getMessage();
        $this->userId = $messageDTO->getUserId();
        $this->animeId = $messageDTO->getAnimeId();
    }
}
