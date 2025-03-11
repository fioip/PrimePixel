<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CameraController;
use App\Http\Controllers\LensController;
use App\Http\Controllers\MemoryCardController;
use App\Http\Controllers\LightsController;
use App\Http\Controllers\CartController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/sanctum/csrf-cookie', function () {
    return response()->json(['status' => 'CSRF token generated']);
});

Route::get('/cameras', [CameraController::class, 'cameras']);
Route::get('/cameras/{id}', [CameraController::class, 'show']);

Route::get('/lenses', [LensController::class, 'lenses']);
Route::get('/lenses/{id}', [LensController::class, 'show']);

Route::get('/MemoryCards', [MemoryCardController::class, 'MemoryCards']);
Route::get('/MemoryCards/{id}', [MemoryCardController::class, 'show']);

Route::get('/Lights', [LightsController::class, 'Lights']);
Route::get('/Lights/{id}', [LightsController::class, 'show']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart']);
    Route::get('/cart', [CartController::class, 'getCart']);
    Route::put('/cart/update/{id}', [CartController::class, 'updateQuantity']);
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeItem']);
});