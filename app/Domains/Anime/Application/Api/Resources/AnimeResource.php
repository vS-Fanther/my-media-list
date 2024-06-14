<?php

namespace App\Domains\Anime\Application\Api\Resources;

use App\Domains\Anime\Models\Anime;
use Illuminate\Http\Resources\Json\JsonResource;

class AnimeResource  extends JsonResource
{
    public function __construct(
        private readonly Anime $anime
    ){
    }

    public function toArray($request): array
    {
        return [
            'id' => $this->anime->id,
            'name' => $this->anime->name,
            'description' => $this->anime->description,
            'original_name' => $this->anime->original_name,
            'genres' => $this->anime->genres,
            'theme' => $this->anime->theme,
            'link' => $this->anime->link,
            'manga_link' => $this->anime->manga_link,
            'user_id' => $this->anime->user_id,
        ];
    }
}
