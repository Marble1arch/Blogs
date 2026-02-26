<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/create', [BlogController::class, 'create']);
Route::get('/blogs/{blog}', [BlogController::class, 'show']);
Route::post('/blogs', [BlogController::class, 'store']);
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit']);
Route::put('/blogs/{blog}', [BlogController::class, 'update']);
Route::delete('/blogs/{blog}',[BlogController::class, 'destroy']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
Route::put('/categories/{category}', [CategoryController::class, 'update']);
Route::delete('/categories/{category}',[CategoryController::class, 'destroy']);

Route::get('/comments/{comment}/edit', [CommentController::class, 'edit']);
Route::put('/comments/{comment}', [CommentController::class, 'update']);
Route::get('/comments/create', [CommentController::class, 'create']);
Route::post('/comments', [CommentController::class, 'store']);
Route::delete('/comments/{comment}',[CommentController::class, 'destroy']);