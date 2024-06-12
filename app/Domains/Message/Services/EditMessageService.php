<?php

namespace App\Domains\Message\Services;

use App\Domains\Message\Application\Actions\EditMessageAction;
use App\Domains\Message\Application\Api\Requests\EditMessageRequest;
use App\Domains\Message\Models\DTOs\EditMessageDTO;
use App\Domains\Message\Models\Message;

class EditMessageService
{
    public function __construct(
        private readonly EditMessageAction $editMessageAction
    )
    {
    }

    public function editMessage(EditMessageRequest $editMessageRequest): Message
    {
        $editMessageDTO = new EditMessageDTO(
            $editMessageRequest->id,
            $editMessageRequest->message);
        return $this->editMessageAction->execute($editMessageDTO);
    }
}
