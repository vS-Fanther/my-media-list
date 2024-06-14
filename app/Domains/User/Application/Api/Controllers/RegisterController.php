<?php

namespace App\Domains\User\Application\Api\Controllers;

use App\Domains\User\Application\Api\Requests\AddUserRequest;
use App\Domains\User\Models\User;
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
    ): User
    {
        return $this->createUserService->execute($addUserRequest);
    }
}
