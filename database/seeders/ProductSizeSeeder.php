<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_id' => 2,
                'size' => ['XS', 'S', 'M', 'L', 'XL'],
            ],
            [
                'product_id' => 3,
                'size' => ['XS', 'S', 'M', 'L', 'XL'],
            ]

        ];

        foreach ($data as $item) {

            foreach ($item['size'] as $size) {
                \App\Models\ProductSize::create([
                    'product_id' => $item['product_id'],
                    'size' => $size
                ]);
            }
        }
    }
}
