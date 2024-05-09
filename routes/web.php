<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', [PostsController::class, 'index'])->name('posts.index');
Route::POST('/posts',[PostsController::class, 'news'])->name('posts.news');
Route::get('/posts/{post}',[PostsController::class, 'show'])->name('posts.show');
