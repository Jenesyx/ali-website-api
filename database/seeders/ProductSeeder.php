<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'title' => 'Business RFID Card',
                'description' => 'Customizable',
                'price' => 15,
            ],
            [
                'id' => 2,
                'title' => 'ClothesProduct',
                'description' => 'Special and Unique T-Shirt',
                'price' => 35,
            ],
        ];
        for ($i = 0; $i < 5; $i++) {
            Product::upsert([
                'id' => 1,
                'title' => 'Business RFID Card',
                'description' => 'Customizable',
                'price' => 15,
            ],['id','title', 'description', 'price']);
        }
    }
}
