<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/blogs', [BlogsController::class, 'index']);
Route::get('/blogs/create', [BlogsController::class, 'create']);
Route::get('/blogs/{blog}', [BlogsController::class, 'show']);
Route::post('/blogs', [BlogsController::class, 'store']);
Route::get('/blogs/{blog}/edit', [BlogsController::class, 'edit']);
Route::put('/blogs/{blog}', [BlogsController::class, 'update']);
Route::delete('/blogs/{blog}',[BlogsController::class, 'destroy']);
