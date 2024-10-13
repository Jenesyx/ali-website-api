<?php

namespace Database\Seeders;

use App\Models\ProductTerial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTerialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_id'=> 4,
                'name' => '1 Month',
                'subprice' => 9
            ],
            [
                'product_id'=> 4,
                'name' => '3 Months',
                'subprice' => 17
            ],
            [
                'product_id'=> 4,
                'name' => '6 Months',
                'subprice' => 27
            ],

        ];

        foreach ($data as $item) {
            ProductTerial::create([
                'product_id' => $item['product_id'],
                'name' => $item['name'],
                'subprice' => $item['subprice'],
            ]);
        }
    }
}
