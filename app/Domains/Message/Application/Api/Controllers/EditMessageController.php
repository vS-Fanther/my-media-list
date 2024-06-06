<?php

namespace App\Domains\Message\Application\Actions;

use App\Domains\Message\Models\Message;

class EditMessageController
{
    public function __construct(
        private readonly EditMessageService $editMessageService
    ){
    }

    public function editMessage(EditMessageRequest $editMessageRequest): Message
    {
        return $this->editMessageService->editMessage($editMessageRequest);
    }
}
