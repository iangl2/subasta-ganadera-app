<?php

namespace App\Http\Controllers;

use App\Models\Auction;

class MarketController extends Controller
{
    // Lista con paginación
    public function market()
    {
        $auctions = Auction::with(['cow', 'bids'])->paginate(6);
        return view('market', compact('auctions'));
    }

    // Página de detalle
    public function auction($id)
    {
        $auction = Auction::with(['cow', 'seller', 'bids'])->findOrFail($id);
        return view('auction', compact('auction'));
    }
}
