<?php

namespace App\Http\Controllers;


use App\Models\Auction;
use App\Models\Cow;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
   public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'end_date'  => 'required|date',
            'location'    => 'required|string',
            
            'starting_price' => 'required|numeric|min:0',
            // Cow fields
            'weight' => 'required|numeric',
            'breed'  => 'required|string',
            'sex'    => 'required|string|in:macho,hembra',
        ]);

        // 1️⃣ Crear la vaca
$cow = Cow::create([
    'user_id' => auth()->id(),  // ← AQUI
    'weight' => $validated['weight'],
    'breed'  => $validated['breed'],
    'sex'    => $validated['sex'],
]);
        // 2️⃣ Crear la subasta
        $auction = Auction::create([
            'cow_id' => $cow->id,
            'seller_id' => auth()->id(), // o fijo
            'name' => $validated['name'],
            'description' => $validated['description'],
            'end_date' => $validated['end_date'],
            'start_date' => now(),
            'location' => $validated['location'],
            'starting_price' => $validated['starting_price'],
        ]);

        return redirect()->back()->with('success', 'Subasta creada correctamente.');
    }
}
