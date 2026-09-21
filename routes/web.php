<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\AuthController;

Route::view('/', 'welcome');

Route::get('/cards', [CardController::class, 'index']);

Route::get('/collection', [CardController::class, 'collection'])
    ->middleware('auth');

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/discover', [CardController::class, 'discover'])
    ->middleware('auth');