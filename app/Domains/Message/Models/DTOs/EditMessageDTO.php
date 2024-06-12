<?php

namespace App\Domains\Message\Models\DTOs;

class EditMessageDTO extends MessageDTO
{
    public function __construct(
        private readonly ?int    $id,
        private readonly ?int    $userId,
        private readonly ?int    $animeId,
        private readonly ?string $message
    )
    {
    }

    public function getId(): ?int
    {
        return $this->id;
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
