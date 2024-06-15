<?php

namespace App\Domains\User\Application\Api\Controllers;

use App\Domains\User\Application\Api\Requests\LoginRequest;
use App\Domains\User\Application\Api\Resources\LoginResource;
use App\Domains\User\Services\LoginUserService;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct(
        private LoginUserService $loginUserService
    ){
    }

    public function login(LoginRequest $loginRequest): LoginResource
    {
        return $this->loginUserService->loginUser($loginRequest);
    }
}
