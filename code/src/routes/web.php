<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Models\Post;

Route::get('/', [PostController::class, 'home']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/get', [PostController::class, 'get']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/{post}/comments', [CommentController::class, 'index']);
Route::get('/posts/{post}/comments/{comment}', [CommentController::class, 'show']);
