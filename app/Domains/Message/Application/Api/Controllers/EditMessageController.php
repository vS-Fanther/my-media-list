<?php

namespace App\Domains\Message\Application\Api\Controllers;

use App\Domains\Message\Application\Api\Requests\EditMessageRequest;
use App\Domains\Message\Application\Api\Resources\MessageResource;
use App\Domains\Message\Services\EditMessageService;
use App\Http\Controllers\Controller;

class EditMessageController extends Controller
{
    public function __construct(
        private readonly EditMessageService $editMessageService
    ) {
    }

    public function editMessage(EditMessageRequest $editMessageRequest): MessageResource
    {
        $message = $this->editMessageService->editMessage($editMessageRequest);
        return new MessageResource($message);
    }
}
