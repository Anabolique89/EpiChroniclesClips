<?php

// use App\Http\Controllers\Api\AuthController as ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // <-- recommended for clarity
use App\Http\Controllers\ProductController;

// Protected routes (require auth and admin)
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

   Route::get('/user', [\App\Http\Controllers\Api\AuthController::class, 'getUser']);
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::apiResource('/product', \App\Http\Controllers\ProductController::class);
});

// Public route
Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
