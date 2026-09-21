<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CardController;

Route::view('/', 'welcome');

Route::get('/cards', [CardController::class, 'index']);

Route::view('/collection', 'collection');