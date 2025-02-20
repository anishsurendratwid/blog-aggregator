<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckUserLoggedIn;

Route::get('/', function () {
    return redirect('/posts');
})->middleware(CheckUserLoggedIn::class);

Route::get('/posts', [PostController::class, 'showAll'])->middleware(CheckUserLoggedIn::class);

Route::get('/post/{id}', [PostController::class, 'show'])->middleware(CheckUserLoggedIn::class);

Route::get('/create', [PostController::class, 'create'])->middleware(CheckUserLoggedIn::class);

Route::post('/create', [PostController::class, 'createPost'])->middleware(CheckUserLoggedIn::class);

// login and sign up routes
Route::get('/register', [AuthController::class, 'showRegistrationForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);


