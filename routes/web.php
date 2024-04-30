<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);
Route::post('/store', [ProductController::class, 'store']);
Route::get('/details/{product}', [ProductController::class, 'getDataByID']);

Route::get('/delete/{product}', [ProductController::class, 'destroy']);
Route::get('/update/{product}', [ProductController::class, 'edit']);
Route::post('/update/{product}/edit', [ProductController::class, 'update']);
