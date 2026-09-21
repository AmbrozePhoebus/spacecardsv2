<?php

namespace App\Http\Controllers;

use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return view('cards.index', [
            'cards' => $cards
        ]);
    }

    public function discover()
    {
        $card = Card::inRandomOrder()->first();

        request()->user()->cards()->attach($card->id);

        return redirect('/collection')->with('discovered', $card);
    }

    public function collection()
{
    $cards = request()->user()->cards
        ->groupBy('id');

    return view('collection', [
        'cards' => $cards
    ]);
}
}