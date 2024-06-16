<?php

namespace App\Domains\Message\Application\Api\Resources;

use App\Domains\Message\Models\Message;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    public function __construct(
        private readonly Message $message
    ) {
    }

    public function toArray($request): array
    {
        return [
            'id' => $this->message->id,
            'message' => $this->message->message,
            'user_id' => $this->message->user_id,
            'anime_id' => $this->message->anime_id,
        ];
    }
}
