<?php

namespace App\Domains\User\Application\Api\Controllers;

use App\Domains\User\Application\Api\Requests\LoginRequest;
use App\Domains\User\Application\Api\Requests\LogoutRequest;
use App\Domains\User\Application\Api\Resources\AuthResource;
use App\Domains\User\Services\AuthService;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function __construct(
        private readonly AuthService $authService
    ) {
    }

    public function login(LoginRequest $loginRequest): AuthResource
    {
        try {
            $data = $this->authService->loginUser($loginRequest);
            return new AuthResource(
                Response::HTTP_OK,
                'Logged in successfully',
                $data
            );
        } catch (Exception $e) {
            return new AuthResource(
                Response::HTTP_BAD_REQUEST,
                $e->getMessage()
            );
        }
    }

    public function logout(LogoutRequest $logoutRequest): AuthResource
    {
        $this->authService->logout($logoutRequest);
        return new AuthResource(
            Response::HTTP_OK,
            'Logged out successfully'
        );
    }
}
