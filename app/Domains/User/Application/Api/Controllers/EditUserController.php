<?php

namespace App\Domains\User\Application\Api\Controllers;

use App\Domains\User\Application\Api\Requests\EditUserRequest;
use App\Domains\User\Application\Api\Resources\UserResource;
use App\Domains\User\Services\EditUserService;
use App\Http\Controllers\Controller;

class EditUserController extends Controller
{
    public function __construct(
        private readonly EditUserService $editUserService
    ){
    }

    public function editUser(EditUserRequest $editUserRequest): UserResource
    {
        $data = $this->editUserService->editUser($editUserRequest);
        return new UserResource($data);
    }
}
