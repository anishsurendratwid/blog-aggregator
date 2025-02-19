<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect('/posts');
});

Route::get('/posts', [PostController::class, 'showAll']);

Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/create', [PostController::class, 'create']);

Route::post('/create', [PostController::class, 'createPost']);