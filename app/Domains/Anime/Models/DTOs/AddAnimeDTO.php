<?php

namespace App\Domains\Anime\Models\DTOs;

class AddAnimeDTO
{
    public function __construct(
        private readonly string $name
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }
}
