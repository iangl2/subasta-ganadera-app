<?php

namespace Database\Seeders;

use App\Models\Bids;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pujas para Subasta 1 (Vaca Holstein)
        Bids::create([
            'user_id' => 5, // Roberto Martínez
            'auction_id' => 1,
            'amount' => 2600.00,
            'bid_date' => now()->addHours(2),
        ]);

        Bids::create([
            'user_id' => 6, // Ana Rodríguez
            'auction_id' => 1,
            'amount' => 2750.00,
            'bid_date' => now()->addHours(4),
        ]);

        Bids::create([
            'user_id' => 5, // Roberto Martínez
            'auction_id' => 1,
            'amount' => 2900.00,
            'bid_date' => now()->addHours(6),
        ]);

        // Pujas para Subasta 2 (Vaca Jersey)
        Bids::create([
            'user_id' => 6, // Ana Rodríguez
            'auction_id' => 2,
            'amount' => 2900.00,
            'bid_date' => now()->addDays(2)->addHours(1),
        ]);

        Bids::create([
            'user_id' => 5, // Roberto Martínez
            'auction_id' => 2,
            'amount' => 3100.00,
            'bid_date' => now()->addDays(2)->addHours(3),
        ]);

        // Pujas para Subasta 3 (Vaca Guernsey)
        Bids::create([
            'user_id' => 5, // Roberto Martínez
            'auction_id' => 3,
            'amount' => 2300.00,
            'bid_date' => now()->addHours(1),
        ]);

        Bids::create([
            'user_id' => 6, // Ana Rodríguez
            'auction_id' => 3,
            'amount' => 2450.00,
            'bid_date' => now()->addHours(3),
        ]);

        // Pujas para Subasta 4 (Toro Brahman)
        Bids::create([
            'user_id' => 5, // Roberto Martínez
            'auction_id' => 4,
            'amount' => 3600.00,
            'bid_date' => now()->addDays(3)->addHours(2),
        ]);

        Bids::create([
            'user_id' => 6, // Ana Rodríguez
            'auction_id' => 4,
            'amount' => 3850.00,
            'bid_date' => now()->addDays(3)->addHours(4),
        ]);

        // Pujas para Subasta 5 (Vaca Angus - Cerrada)
        Bids::create([
            'user_id' => 5, // Roberto Martínez
            'auction_id' => 5,
            'amount' => 2700.00,
            'bid_date' => now()->subDays(8),
        ]);

        Bids::create([
            'user_id' => 6, // Ana Rodríguez
            'auction_id' => 5,
            'amount' => 2850.00,
            'bid_date' => now()->subDays(7),
        ]);

        Bids::create([
            'user_id' => 5, // Roberto Martínez
            'auction_id' => 5,
            'amount' => 3000.00,
            'bid_date' => now()->subDays(5),
        ]);
    }
}
