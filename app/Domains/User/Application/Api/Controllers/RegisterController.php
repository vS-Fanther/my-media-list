<?php

namespace App\Domains\User\Application\Api\Controllers;

use App\Domains\User\Application\Api\Requests\AddUserRequest;
use App\Domains\User\Application\Api\Resources\RegisterResource;
use App\Domains\User\Services\CreateUserService;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

    public function __construct(
        private readonly CreateUserService $createUserService
    ) {
    }

    public function addUser(AddUserRequest $addUserRequest): RegisterResource
    {
        $data = $this->createUserService->execute($addUserRequest);
        return new RegisterResource($data->id);
    }
}
