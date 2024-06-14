<?php

namespace App\Domains\Anime\Models\DTOs;

class EditAnimeDTO
{
    public function __construct(
        private readonly int $id,
        private readonly string $name,
        private readonly ?string $description,
        private readonly ?string $genres,
        private readonly ?string $theme,
        private readonly ?string $originalName,
        private readonly ?string $link,
        private readonly ?string $mangaLink,
    )
    {
    }

    public function getId(): int
    {
        return $this->id;
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


}
