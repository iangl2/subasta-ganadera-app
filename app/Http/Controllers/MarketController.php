<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function market()
    {
        $auctions = Auction::with('cow')->paginate(6);
        return view('market', compact('auctions'));
    }

    public function auction($id)
    {
        $auction = Auction::with(['cow', 'seller', 'bids'])->findOrFail($id);
        return view('auction', compact('auction'));
    }


public function placeBid(Request $request, $id)
{
    $auction = Auction::with('bids')->findOrFail($id);

    // Si la subasta ya terminó, evitar pujas
    if (\Carbon\Carbon::now()->greaterThan(\Carbon\Carbon::parse($auction->end_date))) {
        return back()->with('error', 'La subasta ya finalizó.');
    }

    // Validación básica
    $request->validate([
        'amount' => 'required|numeric|min:0.01',
    ]);

    $amount = (float) $request->input('amount');
    $currentHighest = (float) $auction->highest_bid; // accesor computado

    if ($amount <= $currentHighest) {
        // agregar error específico
        return back()
            ->withInput()
            ->withErrors(['amount' => "La puja debe ser mayor que $".number_format($currentHighest, 2)]);
    }

    // Crear la puja
    Bid::create([
        'user_id' => auth()->id(),
        'auction_id' => $auction->id,
        'amount' => $amount,
        'bid_date' => now(),
    ]);

    return back()->with('success', 'Puja registrada correctamente.');
}
}
