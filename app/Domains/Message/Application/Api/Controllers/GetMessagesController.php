<?php

namespace App\Domains\Message\Application\Api\Controllers;

use App\Domains\Message\Application\Actions\GetMessagesRequest;
use App\Domains\Message\Application\Actions\GetMessagesService;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

class GetMessagesController extends Controller
{
    public function __construct(
        private readonly GetMessagesService $getMessagesService
    ){
    }

    public function getMessages(GetMessagesRequest $getMessagesRequest): Collection
    {
        return $this->getMessagesService->getMessages($getMessagesRequest);
    }
}
