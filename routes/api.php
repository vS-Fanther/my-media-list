<?php

use App\Domains\Anime\Application\Api\Controllers\AddAnimeController;
use App\Domains\Anime\Application\Api\Controllers\EditAnimeController;
use App\Domains\Anime\Application\Api\Controllers\GetAllAnimeController;
use App\Domains\Anime\Application\Api\Controllers\GetAnimeByUserIdController;
use App\Domains\Message\Application\Api\Controllers\AddMessageController;
use App\Domains\Message\Application\Api\Controllers\DeleteMessageController;
use App\Domains\Message\Application\Api\Controllers\EditMessageController;
use App\Domains\Message\Application\Api\Controllers\GetMessagesController;
use App\Domains\Message\Application\Api\Controllers\GetMessagesByAnimeOrUserIdController;
use App\Domains\User\Application\Api\Controllers\EditUserController;
use App\Domains\User\Application\Api\Controllers\AuthController;
use App\Domains\User\Application\Api\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::prefix('/anime')->group(function () {
    Route::post('/add', [AddAnimeController::class, 'addAnime'])->middleware('auth:sanctum');
    Route::get('/', [GetAllAnimeController::class, 'getAllAnime']);
    Route::post('/edit', [EditAnimeController::class, 'editAnime'])->middleware('auth:sanctum');
    Route::get('/owner', [GetAnimeByUserIdController::class, 'getAnimeByUserId']);
});

Route::prefix('/user')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum')->name('logout');
    Route::post('/add', [RegisterController::class, 'addUser']);
    Route::post('/edit', [EditUserController::class, 'editUser'])->middleware('auth:sanctum');
});

Route::prefix('/messages')->group(function () {
    Route::get('/anime', [GetMessagesByAnimeOrUserIdController::class, 'getMessagesForAnime']);
    Route::get('/user', [GetMessagesByAnimeOrUserIdController::class, 'getMessagesForUser']);
    Route::get('/', [GetMessagesController::class, 'getMessages']);
    Route::post('/add', [AddMessageController::class, 'addMessage'])->middleware('auth:sanctum');
    Route::post('/', [EditMessageController::class, 'editMessage'])->middleware('auth:sanctum');
    Route::delete('/', [DeleteMessageController::class, 'deleteMessage'])->middleware('auth:sanctum');
});
