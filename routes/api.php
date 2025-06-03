<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\ProductController as ControllersProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Protected routes (require auth and admin)

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/user', [\App\Http\Controllers\Api\AuthController::class, 'getUser']);
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);

    Route::apiResource('/products', \App\Http\Controllers\ProductController::class);
});

Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

// Route::get('/login', function () {
//     return response()->json(['message' => 'Please login.'], 401);
// })->name('login');
