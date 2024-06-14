<?php

namespace App\Domains\Message\Models\DTOs;

/**
 * @property int $id
 * @property string $message
 */
class EditMessageDTO
{
    public function __construct(
        private readonly ?int    $id,
        private readonly ?string $message
    ){
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }
}
