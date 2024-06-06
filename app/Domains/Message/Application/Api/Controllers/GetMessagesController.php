<?php

namespace App\Domains\Message\Application\Actions;

use Illuminate\Database\Eloquent\Collection;

class GetMessagesController
{
    public function __construct(
        private readonly GetMessagesService $getMessagesService
    ){
    }

    public function editMessage(GetMessagesRequest $getMessagesRequest): Collection
    {
        return $this->getMessagesService->getMessages($getMessagesRequest);
    }
}
