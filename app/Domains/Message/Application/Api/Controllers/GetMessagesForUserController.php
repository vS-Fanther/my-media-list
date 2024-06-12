<?php

namespace App\Domains\Message\Application\Api\Controllers;

use App\Domains\Message\Application\Api\Requests\GetUserMessagesRequest;
use App\Domains\Message\Services\GetMessagesService;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

class GetMessagesForUserController extends Controller
{
    public function __construct(
        private readonly GetMessagesService $getMessagesService
    ){
    }

    public function getMessagesForUser(GetUserMessagesRequest $getUserMessagesRequest): Collection
    {
        return $this->getMessagesService->getMessagesForUser($getUserMessagesRequest);
    }
}
