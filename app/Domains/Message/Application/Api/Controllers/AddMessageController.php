<?php

namespace App\Domains\Message\Application\Api\Controllers;

use App\Domains\Message\Application\Api\Requests\AddMessageRequest;
use App\Domains\Message\Models\Message;
use App\Domains\Message\Services\AddMessageService;
use App\Http\Controllers\Controller;

class AddMessageController extends Controller
{
    public function __construct(
        private readonly AddMessageService $addMessageService
    ){
    }

    public function addMessage(AddMessageRequest $addMessageRequest): Message
    {
        return $this->addMessageService->addMessage($addMessageRequest);
    }
}
