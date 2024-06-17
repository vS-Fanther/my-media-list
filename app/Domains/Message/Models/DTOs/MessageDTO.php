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
        private readonly ?int    $userId,
        private readonly ?int    $animeId,
        private readonly ?string $message
    ) {
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getAnimeId(): ?int
    {
        return $this->animeId;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }



}
