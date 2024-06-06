<?php

namespace App\Domains\Message\Models\DTOs;

/**
 * @property int $userId
 * @property int $animeId
 * @property string $message
 */
class MessageDTO
{
    public function __construct(
        private string $message,
        private int    $animeId,
        private int    $userId,
    )
    {
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getAnimeId(): int
    {
        return $this->animeId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }


}
