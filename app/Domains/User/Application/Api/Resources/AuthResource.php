<?php

namespace App\Domains\User\Application\Api\Resources;

use App\Domains\User\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    public function __construct(
        public readonly int $statusCode,
        public readonly string $message,
        public readonly ?User $user = null,
    ) {
    }

    public function toArray($request): array
    {
        return [
            'id' => $this->when($this->user, $this->user?->getId()),
            'email' => $this->when($this->user, $this->user?->getEmail()),
            'token' => $this->when($this->user, $this->user?->getToken()),
            'message' => $this->when(! $this->user, $this->message),
        ];
    }
}
