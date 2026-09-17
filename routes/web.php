<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/cards', 'cards.index');

Route::view('/collection', 'collection');