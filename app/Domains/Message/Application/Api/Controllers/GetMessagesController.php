<?php

namespace App\Domains\Message\Application\Api\Controllers;

use App\Domains\Message\Application\Api\Requests\GetMessagesRequest;
use App\Domains\Message\Services\GetMessagesService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetMessagesController extends Controller
{
    public function __construct(
        private readonly GetMessagesService $getMessagesService
    ){
    }

    public function getMessages(GetMessagesRequest $getMessagesByTextRequest): ResourceCollection
    {
        $data = $this->getMessagesService->getMessages($getMessagesByTextRequest);
        return new ResourceCollection($data);
    }
}
