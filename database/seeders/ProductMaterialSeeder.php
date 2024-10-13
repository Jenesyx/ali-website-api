<?php

namespace Database\Seeders;


use App\Models\ProductMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_id' => 1,
                'material_id' => 1,
            ],
            [
                'product_id' => 1,
                'material_id' => 2,
            ],
            [
                'product_id' => 5,
                'material_id' => 1,
            ],
            [
                'product_id' => 5,
                'material_id' => 2,
            ]

        ];

        foreach ($data as $item) {
            ProductMaterial::create([
                'product_id' => $item['product_id'],
                'material_id' => $item['material_id'],
            ]);
        }
    }
}
