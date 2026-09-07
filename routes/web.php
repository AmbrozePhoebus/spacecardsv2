<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome',
    [
        'greeting' => 'Welcome to Spacecards,',
        'person' => request('person', 'Austrospace')
    ]
);
Route::view('/about', 'about');
Route::view('/contact', 'contact');