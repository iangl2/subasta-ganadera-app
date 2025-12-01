<?php

namespace Database\Seeders;

use App\Models\Auctions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Subasta 1: Vaca Holstein de Juan Pérez
        Auctions::create([
            'cow_id' => 1,
            'seller_id' => 2,
            'name' => 'Subasta de Vacas Lecheras',
            'status' => 'open',
            'start_date' => now()->addDay(),
            'end_date' => now()->addDays(7),
            'starting_price' => 2500.00,
            'location' => 'Rancho El Buen Pastor, Panamá',
            'description' => 'Vaca Holstein de alta producción lechera, peso 650.50 kg, en excelentes condiciones.',
        ]);

        // Subasta 2: Vaca Jersey de Juan Pérez
        Auctions::create([
            'cow_id' => 2,
            'seller_id' => 2,
            'name' => 'Subasta de Ganado Bovino',
            'status' => 'open',
            'start_date' => now()->addDays(2),
            'end_date' => now()->addDays(9),
            'starting_price' => 2800.00,
            'location' => 'Hacienda La Esperanza, Panamá',
            'description' => 'Vaca Jersey pura, peso 700 kg, certificada para reproducción.',
        ]);

        // Subasta 3: Vaca Guernsey de María García
        Auctions::create([
            'cow_id' => 3,
            'seller_id' => 3,
            'name' => 'Subasta de Ganado de Raza Guernsey',
            'status' => 'open',
            'start_date' => now()->addDay(),
            'end_date' => now()->addDays(5),
            'starting_price' => 2200.00,
            'location' => 'Granja Los Pastores, Panamá',
            'description' => 'Vaca Guernsey, peso 580.75 kg, excelente temperamento y producción.',
        ]);

        // Subasta 4: Toro Brahman de Carlos López
        Auctions::create([
            'cow_id' => 5,
            'seller_id' => 4,
            'name' => 'Subasta de Toro Brahman',
            'status' => 'open',
            'start_date' => now()->addDays(3),
            'end_date' => now()->addDays(10),
            'starting_price' => 3500.00,
            'location' => 'Finca Santa Cruz, Panamá',
            'description' => 'Toro Brahman puro, peso 750 kg, línea genética premium para reproducción.',
        ]);

        // Subasta 5: Vaca Angus de Carlos López
        Auctions::create([
            'cow_id' => 6,
            'seller_id' => 4,
            'name' => 'Subasta de Ganado Angus',
            'status' => 'closed',
            'start_date' => now()->subDays(10),
            'end_date' => now()->subDays(3),
            'starting_price' => 2600.00,
            'location' => 'Finca Santa Cruz, Panamá',
            'description' => 'Vaca Angus negra, peso 680.50 kg, disponible para carne de calidad premium.',
        ]);
    }
}
