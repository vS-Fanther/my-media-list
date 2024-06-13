<?php

namespace App\Domains\Message\Application\Api\Controllers;

use App\Domains\Message\Application\Api\Requests\GetMessagesRequest;
use App\Domains\Message\Services\GetMessagesService;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

class GetMessagesController extends Controller
{
    public function __construct(
        private readonly GetMessagesService $getMessagesService
    ){
    }

    public function getMessages(GetMessagesRequest $getMessagesByTextRequest): Collection
    {
        return $this->getMessagesService->getMessages($getMessagesByTextRequest);
    }
}
