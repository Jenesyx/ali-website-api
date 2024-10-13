<?php

namespace Database\Seeders;

use App\Models\ProductColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_id' => 2,
                'color' => 'Black',
                'hex' => '#000000',
            ],
            [
                'product_id' => 2,
                'color' => 'White',
                'hex' => '#FFFFFF',
            ],
            [
                'product_id' => 3,
                'color' => 'Black',
                'hex' => '#000000',
            ],
            [
                'product_id' => 3,
                'color' => 'White',
                'hex' => '#FFFFFF',
            ],

        ];

        foreach ($data as $item) {
            ProductColor::create([
                'product_id' => $item['product_id'],
                'color' => $item['color'],
                'hex' => $item['hex'],
            ]);
        }
    }
}
