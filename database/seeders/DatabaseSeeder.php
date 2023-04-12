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
         \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'name' => 'Beef',
            'unit' => 'kg',
            'unitPrice' => 380.99,
            'category' => 'Fresh Meat'
        ]);

        Product::create([
            'name' => 'Pork',
            'unit' => 'kg',
            'unitPrice' => 320,
            'category' => 'Fresh Meat'
        ]);

        Product::create([
            'name' => 'Chicken Wings',
            'unit' => 'kg',
            'unitPrice' => 200,
            'category' => 'Fresh Meat'
        ]);

        Product::create([
            'name' => 'Cabbage',
            'unit' => 'kg',
            'unitPrice' => 100,
            'category' => 'Fresh Vegetable'
        ]);
    }
}
