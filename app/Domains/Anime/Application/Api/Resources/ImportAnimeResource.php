<?php

namespace App\Domains\Anime\Application\Api\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ImportAnimeResource extends JsonResource
{
    public function __construct(
        private readonly string $response
    ) {
    }

    public function toArray(Request $request)
    {
        return [
            'data' => $this->response
        ];
    }

}
