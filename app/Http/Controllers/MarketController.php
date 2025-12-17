<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;

class MarketController extends Controller
{

  public function market(Request $request)
{
    $query = Auction::with('cow')
        ->where('end_date', '>', now())
        ->orderBy('created_at', 'desc');

    // 🔎 Filtro por raza (textbox)
    if ($request->filled('breed')) {
        $query->whereHas('cow', function ($q) use ($request) {
            $q->where('breed', 'ILIKE', '%' . $request->breed . '%');
        });
    }

    // ⚖️ Filtro por peso máximo (range o number)
    if ($request->filled('weight')) {
        $query->whereHas('cow', function ($q) use ($request) {
            $q->where('weight', '>=', $request->weight);
        });
    }

    // 🚻 Filtro por sexo
    if ($request->filled('sex') && $request->sex !== 'any') {
        $query->whereHas('cow', function ($q) use ($request) {
            $q->where('sex', $request->sex);
        });
    }

     // 💰 Filtro por precio máximo (highest bid)
    if ($request->filled('max_price')) {
        $query->whereRaw('
            COALESCE(
                (SELECT MAX(amount) FROM bids WHERE bids.auction_id = auctions.id),
                auctions.starting_price
            ) <= ?
        ', [$request->max_price]);
    }

    $auctions = $query
        ->paginate(9)
        ->withQueryString(); // ⬅ mantiene filtros al paginar

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

    return back()->with('success', '¡Registro de puja exitoso!');
}

}
