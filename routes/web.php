<?php

use App\Domains\Anime\Application\Api\Controllers\AddAnimeController;
use App\Domains\User\Application\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/anime/add', [AddAnimeController::class, 'addAnime']);
Route::post('/user/add', [RegisterController::class, 'addUser']);
