<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return "This is a page where all posts will be shown";
});

Route::get('/post/{id}', [PostController::class, 'show']);