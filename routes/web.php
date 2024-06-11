<?php

use App\Domains\Anime\Application\Api\Controllers\AddAnimeController;
use App\Domains\Anime\Application\Api\Controllers\GetAnimeController;
use App\Domains\Message\Application\Api\Controllers\AddMessageController;
use App\Domains\Message\Application\Api\Controllers\DeleteMessageController;
use App\Domains\Message\Application\Api\Controllers\EditMessageController;
use App\Domains\Message\Application\Api\Controllers\GetMessagesController;
use App\Domains\User\Application\Api\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/anime/add', [AddAnimeController::class, 'addAnime']);
Route::post('/anime/get', [GetAnimeController::class, 'getAnime']);

Route::post('/user/add', [RegisterController::class, 'addUser']);

Route::prefix('/message')->group(function () {
    Route::get('/', [GetMessagesController::class, 'getMessages']);
    Route::post('/add', [AddMessageController::class, 'addMessage']);
    Route::put('/', [EditMessageController::class, 'editMessage']);
    Route::delete('/', [DeleteMessageController::class, 'deleteMessage']);
});
