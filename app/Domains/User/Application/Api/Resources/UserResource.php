<?php

namespace App\Domains\User\Application\Api\Resources;

use App\Domains\User\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function __construct(
        private readonly User $user
    ) {
    }

    public function toArray($request): array
    {
        return [
            'id' => $this->user->id,
            'username' => $this->user->username,
            'email' => $this->user->email,
            'password' => $this->user->password,
        ];
    }
}
