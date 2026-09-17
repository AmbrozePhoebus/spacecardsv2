<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/ideas', function () {
   // $ideas = session()->get('ideas', []);

  //  $ideas = Illuminate\Support\Facades\DB::table('ideas')->get();

  $ideas = Idea::all();

   // dd($ideas);

    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    $idea = request('idea');

    session()->push('ideas', $idea);

    return redirect('/ideas');
});

// temp
Route::get('/delete-ideas', function () {
    session()->forget('ideas');

    return redirect('/ideas');
});