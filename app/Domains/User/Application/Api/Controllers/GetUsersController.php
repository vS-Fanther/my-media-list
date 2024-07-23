<?php

namespace App\Domains\User\Application\Api\Controllers;

use App\Domains\User\Application\Api\Requests\GetUsersRequest;
use App\Domains\User\Services\GetUsersService;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetUsersController
{
    public function __construct(
        private GetUsersService $getUsersService
    ) {
    }

    public function getUsers(GetUsersRequest $getUsersRequest): ResourceCollection
    {
        return new ResourceCollection($this->getUsersService->getUsers($getUsersRequest));
    }
}
