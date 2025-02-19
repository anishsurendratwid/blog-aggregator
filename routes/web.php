<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return "This is a page where all posts will be shown";
});

Route::get('/post/{id}', function (string $id) {
    return "This is a page where psost id $id will be shown";
});