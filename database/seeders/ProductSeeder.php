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
            'description' => 'Cpu Amd ryzen 7 5700u 8 Core, 16 Threads con frequenza base di 1,8 GHz, frequenza in burst Mode di 4,3 GHz, Memoria DDR 4 16 Gb da 3200 Mhz, 3 usb di cui 1 type - C',
            'quantity' => '20',
            'price' => '50',
            'public_price' => '500',
            'margin' => '450',
            'category_id' => '1'
        ]);

        Product::create([
            'name' => 'Prodotto 2',
            'description' => 'Display Led Antiriflesso da 15,6 pollici Full HD (1920x1080) Super Vertical Allignment (SVA), Trusted Platform Module (TPM) integrato, memoria espandibile fino a 24 Gb ddr 4 da 3200 MHz',
            'quantity' => '42',
            'price' => '420',
            'public_price' => '1299',
            'margin' => '450',
            'category_id' => '1'
        ]);
    }
}
