<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;

Route::middleware('auth')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'index']);
});
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'index']);
Route::post('/login', [AuthenticatedSessionController::class, 'destroy']);