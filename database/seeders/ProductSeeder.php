<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Prodotto 1',
            'quantity' => '20',
            'price' => '50',
            'public_price' => '500',
            'category_id' => '1'
        ]);

        Product::create([
            'name' => 'Prodotto 2',
            'quantity' => '42',
            'price' => '420',
            'public_price' => '1299',
            'category_id' => '1'
        ]);
    }
}
