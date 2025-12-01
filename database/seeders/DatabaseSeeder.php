<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Comenta o elimina esta línea si no tienes factories
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // En su lugar, llama a tus seeders específicos
        $this->call([
            UserSeeder::class,
            CowSeeder::class,
            AuctionSeeder::class,
            BidSeeder::class,
        ]);
    }
}
