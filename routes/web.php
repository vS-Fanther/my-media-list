<?php

use App\Domains\Anime\Application\Api\Controllers\AddAnimeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/anime/add', [AddAnimeController::class, 'addAnime']);
