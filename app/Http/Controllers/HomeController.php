<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $auctions = Auction::with('cow')
            ->where('end_date', '>', now())
            ->orderBy('created_at', 'desc')
            ->take(10) // ideal para carrusel
            ->get();

        return view('home', compact('auctions'));
    }
}
