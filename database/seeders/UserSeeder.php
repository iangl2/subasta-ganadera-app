<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuario administrador
        User::create([
            'name' => 'Admin Usuario',
            'email' => 'admin@subasta-ganadera.com',
            'password' => Hash::make('password123'),
            'phone' => '+507 6123-4567',
            'active' => true,
        ]);

        // Ganaderos/Vendedores
        User::create([
            'name' => 'Juan Pérez',
            'email' => 'juan.perez@example.com',
            'password' => Hash::make('password123'),
            'phone' => '+507 6234-5678',
            'active' => true,
        ]);

        User::create([
            'name' => 'María García',
            'email' => 'maria.garcia@example.com',
            'password' => Hash::make('password123'),
            'phone' => '+507 6345-6789',
            'active' => true,
        ]);

        User::create([
            'name' => 'Carlos López',
            'email' => 'carlos.lopez@example.com',
            'password' => Hash::make('password123'),
            'phone' => '+507 6456-7890',
            'active' => true,
        ]);

        // Compradores
        User::create([
            'name' => 'Roberto Martínez',
            'email' => 'roberto.martinez@example.com',
            'password' => Hash::make('password123'),
            'phone' => '+507 6567-8901',
            'active' => true,
        ]);

        User::create([
            'name' => 'Ana Rodríguez',
            'email' => 'ana.rodriguez@example.com',
            'password' => Hash::make('password123'),
            'phone' => '+507 6678-9012',
            'active' => true,
        ]);
    }
}
