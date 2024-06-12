<?php

use App\Domains\Anime\Application\Api\Controllers\AddAnimeController;
use App\Domains\Anime\Application\Api\Controllers\GetAnimeController;
use App\Domains\Message\Application\Api\Controllers\AddMessageController;
use App\Domains\Message\Application\Api\Controllers\DeleteMessageController;
use App\Domains\Message\Application\Api\Controllers\EditMessageController;
use App\Domains\Message\Application\Api\Controllers\GetMessagesController;
use App\Domains\User\Application\Api\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

Route::post('/anime/add', [AddAnimeController::class, 'addAnime']);
Route::get('/anime/get', [GetAnimeController::class, 'getAnime']);

Route::post('/user/add', [RegisterController::class, 'addUser']);

Route::prefix('/message')->group(function () {
    Route::get('/', [GetMessagesController::class, 'getMessages']);
    Route::post('/add', [AddMessageController::class, 'addMessage']);
    Route::post('/', [EditMessageController::class, 'editMessage']);
    Route::delete('/', [DeleteMessageController::class, 'deleteMessage']);
});
