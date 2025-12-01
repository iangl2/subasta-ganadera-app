<?php

namespace Database\Seeders;

use App\Models\Cows;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vacas del usuario Juan Pérez (user_id: 2)
        Cows::create([
            'user_id' => 2,
            'weight' => 650.50,
            'sex' => 'Hembra',
            'breed' => 'Holstein',
            'status' => 'available',
            'image' => 'img/Vacas-lecheras.png',
        ]);

        Cows::create([
            'user_id' => 2,
            'weight' => 700.00,
            'sex' => 'Hembra',
            'breed' => 'Jersey',
            'status' => 'available',
            'image' => 'img/Vacas.jpg',
        ]);

        // Vacas del usuario María García (user_id: 3)
        Cows::create([
            'user_id' => 3,
            'weight' => 580.75,
            'sex' => 'Hembra',
            'breed' => 'Guernsey',
            'status' => 'available',
            'image' => null,
        ]);

        Cows::create([
            'user_id' => 3,
            'weight' => 620.25,
            'sex' => 'Hembra',
            'breed' => 'Brown Swiss',
            'status' => 'sold',
            'image' => null,
        ]);

        // Vacas del usuario Carlos López (user_id: 4)
        Cows::create([
            'user_id' => 4,
            'weight' => 750.00,
            'sex' => 'Macho',
            'breed' => 'Brahman',
            'status' => 'available',
            'image' => null,
        ]);

        Cows::create([
            'user_id' => 4,
            'weight' => 680.50,
            'sex' => 'Hembra',
            'breed' => 'Angus',
            'status' => 'available',
            'image' => null,
        ]);
    }
}
