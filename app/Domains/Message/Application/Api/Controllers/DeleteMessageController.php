<?php

namespace App\Domains\Message\Application\Api\Controllers;

use App\Domains\Message\Application\Actions\DeleteMessageRequest;
use App\Domains\Message\Application\Actions\DeleteMessageService;
use App\Http\Controllers\Controller;

class DeleteMessageController extends Controller
{
    public function __construct(
        private readonly DeleteMessageService $deleteMessageService
    ){
    }

    public function deleteMessage(DeleteMessageRequest $deleteMessageRequest): int
    {
        return $this->deleteMessageService->deleteMessage($deleteMessageRequest);
    }
}
