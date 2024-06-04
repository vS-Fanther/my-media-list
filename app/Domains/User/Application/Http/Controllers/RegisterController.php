<?php

namespace App\Domains\User\Application\Http\Controllers;

use App\Domains\User\Application\Actions\CreateUserAction;
use App\Domains\User\Application\Actions\DTOs\CreateUserDTO;
use App\Domains\User\Application\Http\Resources\RegisterResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(
        Request          $request,
        CreateUserAction $action
    ): RegisterResource
    {
        $dto = CreateUserDTO::fromRequest($request);
        $user = $action->execute($dto);

        return new RegisterResource();
    }
}
