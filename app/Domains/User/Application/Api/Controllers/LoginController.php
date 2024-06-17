<?php

namespace App\Domains\User\Application\Api\Controllers;

use App\Domains\User\Application\Api\Requests\LoginRequest;
use App\Domains\User\Application\Api\Resources\LoginResource;
use App\Domains\User\Services\LoginUserService;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    public function __construct(
        private LoginUserService $loginUserService
    ) {
    }

    public function login(LoginRequest $loginRequest): LoginResource
    {
        try {
            $data = $this->loginUserService->loginUser($loginRequest);
            return new LoginResource(
                Response::HTTP_OK,
                'Logged in successfully',
                $data
            );
        } catch (Exception $e) {
            return new LoginResource(
                Response::HTTP_BAD_REQUEST,
                $e->getMessage()
            );
        }
    }
}
