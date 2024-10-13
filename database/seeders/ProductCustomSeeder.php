<?php

namespace Database\Seeders;

use App\Models\ProductCustom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_id' => 1,
                'custom_id' => 1,
            ],
            [
                'product_id' => 1,
                'custom_id' => 2,
            ],
            [
                'product_id' => 5,
                'custom_id' => 1,
            ],
            [
                'product_id' => 5,
                'custom_id' => 2,
            ],
        ];

        foreach ($data as $item) {
            ProductCustom::create([
                'product_id' => $item['product_id'],
                'custom_id' => $item['custom_id'],
            ]);
        }
    }
}
