<?php

namespace App\Domains\User\Application\Api\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{
    public function __construct(
        private readonly int $id,
    ) {
    }

    public function toArray($request): array
    {
        return ['userId' => $this->id];
    }
}
