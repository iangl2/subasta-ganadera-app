<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
 
public function index()
{
    // Subastas donde el usuario ha pujado
    $bidAuctions = Auth::user()
        ->bids()
        ->with([
            'auction.cow',
            'auction.seller',
            'auction.bids'
        ])
        ->get()
        ->pluck('auction')
        ->unique('id')
        ->values();

    // Subastas creadas por el usuario
    $myAuctions = Auth::user()
        ->auctions()
        ->with([
            'cow',
            'seller',
            'bids'
        ])
        ->get();

    return view('profile', [
        'user' => Auth::user(),
        'bidAuctions' => $bidAuctions,
        'myAuctions' => $myAuctions
    ]);
}
}
