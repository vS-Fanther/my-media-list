<?php

namespace App\Domains\User\Services;

use App\Domains\User\Application\Api\Requests\GetUsersRequest;
use App\Domains\User\Repository\UserDbRepository;
use Illuminate\Database\Eloquent\Collection;

class GetUsersService
{
    public function __construct(
      private readonly UserDbRepository $userDbRepository
    ) {
    }

    public function getUsers(GetUsersRequest $getUsersRequest): Collection
    {
        return $this->userDbRepository->getUsersWithPaging(
            $getUsersRequest->limit,
            $getUsersRequest->page
        );
    }
}
