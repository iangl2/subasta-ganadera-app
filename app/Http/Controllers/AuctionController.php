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
            'start_date'  => 'required|date',
            'location'    => 'required|string',
            
            // Cow fields
            'weight' => 'required|numeric',
            'breed'  => 'required|string',
            'sex'    => 'required|string|in:macho,hembra',
        ]);

        // 1️⃣ Crear la vaca
        $cow = Cow::create([
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
            'start_date' => $validated['start_date'],
            'location' => $validated['location'],
        ]);

        return redirect()->back()->with('success', 'Subasta creada correctamente.');
    }
}
