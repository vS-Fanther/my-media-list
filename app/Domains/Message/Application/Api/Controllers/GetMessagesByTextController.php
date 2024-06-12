<?php

namespace App\Domains\Message\Application\Api\Controllers;

use App\Domains\Message\Application\Api\Requests\GetMessagesByTextRequest;
use App\Domains\Message\Services\GetMessagesService;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

class GetMessagesByTextController extends Controller
{
    public function __construct(
        private readonly GetMessagesService $getMessagesService
    ){
    }

    public function getMessagesByText(GetMessagesByTextRequest $getMessagesByTextRequest): Collection
    {
        return $this->getMessagesService->getMessagesByText($getMessagesByTextRequest);
    }
}
