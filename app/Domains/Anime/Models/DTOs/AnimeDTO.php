<?php

namespace App\Domains\Anime\Models\DTOs;

class AnimeDTO
{
    public function __construct(
        private readonly string $name,
        private readonly ?string $description,
        private readonly ?string $genres,
        private readonly ?string $theme,
        private readonly ?string $originalName,
        private readonly ?string $link,
        private readonly ?string $mangaLink,
        private readonly ?int $userId
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getGenres(): ?string
    {
        return $this->genres;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function getOriginalName(): ?string
    {
        return $this->originalName;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function getMangaLink(): ?string
    {
        return $this->mangaLink;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }


}
