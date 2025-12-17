<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Cow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuctionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'            => 'required|string|max:255',
            'description'     => 'required|string',
            'end_date'        => 'required|date',
            'location'        => 'required|string',
            'starting_price'  => 'required|numeric|min:0',

            // Cow
            'weight' => 'required|numeric',
            'breed'  => 'required|string|max:100',
            'sex'    => 'required|in:macho,hembra',

            // Imagen
            'image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // 🖼️ Subir imagen a MinIO (S3)
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')
                ->storePublicly('cows', 's3');
        }

        // 🐄 Crear vaca
        $cow = Cow::create([
            'user_id' => auth()->id(),
            'weight'  => $validated['weight'],
            'breed'   => $validated['breed'],
            'sex'     => $validated['sex'],
            'image'   => $imagePath,
        ]);

        // 🔨 Crear subasta
        Auction::create([
            'cow_id'         => $cow->id,
            'seller_id'      => auth()->id(),
            'name'           => $validated['name'],
            'description'    => $validated['description'],
            'start_date'     => now(),
            'end_date'       => $validated['end_date'],
            'location'       => $validated['location'],
            'starting_price' => $validated['starting_price'],
        ]);

        return redirect()->back()
            ->with('success', 'Subasta creada correctamente.');
    }
}
