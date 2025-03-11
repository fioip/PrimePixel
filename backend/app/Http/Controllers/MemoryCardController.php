<?php

namespace App\Http\Controllers;

use App\Models\MemoryCard;
use Illuminate\Http\Request;

class MemoryCardController extends Controller
{
    public function MemoryCards()
    {
        $cards = MemoryCard::all()
            ->map(function ($card) {
                $card->photo = basename($card->photo);
                return $card;
            });
        return response()->json($cards);
    }

    public function show($id)
    {
        $card = MemoryCard::findOrFail($id);
        $card->photo = basename($card->photo);
        return response()->json($card);
    }
}
