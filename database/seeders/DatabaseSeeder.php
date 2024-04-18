<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Mie Ayam',
            'price' => 10000,
            'stock' => 29
        ]);

        Product::create([
            'name' => 'Bakso',
            'price' => 15000,
            'stock' => 16
        ]);

        Product::create([
            'name' => 'Nasi Goreng',
            'price' => 20000,
            'stock' => 42
        ]);
    }
}
