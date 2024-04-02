<?php

use App\debug\Debug;
use App\Http\Controllers\PostController;
use App\RMVC\Route\Route;



Route::get('/', [PostController::class, 'index'])
    ->name('posts.index')
    ->middleware('auth');

Route::get('/posts/{id}', [PostController::class, 'show'])
    ->name('posts.show')
    ->middleware('auth');



