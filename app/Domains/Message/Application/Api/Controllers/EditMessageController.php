<?php

namespace App\Domains\Message\Application\Api\Controllers;

use App\Domains\Message\Application\Actions\EditMessageRequest;
use App\Domains\Message\Application\Actions\EditMessageService;
use App\Domains\Message\Models\Message;
use App\Http\Controllers\Controller;

class EditMessageController extends Controller
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
