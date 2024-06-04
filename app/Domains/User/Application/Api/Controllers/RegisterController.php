<?php

namespace App\Domains\User\Application\Http\Controllers;

use App\Domains\User\Application\Api\Requests\AddUserRequest;
use App\Domains\User\Application\Http\Resources\RegisterResource;
use App\Domains\User\Services\CreateUserService;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    public function __construct(
        private readonly CreateUserService $createUserService)
    {

    }
    public function addUser(
        AddUserRequest $addUserRequest,
    ): void
    {
        $this->createUserService->execute($addUserRequest);
    }
}
