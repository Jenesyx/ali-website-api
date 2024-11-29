<?php

namespace Database\Seeders;

use App\Models\ProductFunction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductFunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_id' => 1,
                'function_id' => 1,
            ],
            [
                'product_id' => 1,
                'function_id' => 2,
            ],
            [
                'product_id' => 1,
                'function_id' => 3,
            ],
            [
                'product_id' => 1,
                'function_id' => 4,
            ],
            [
                'product_id' => 1,
                'function_id' => 5,
            ],
            [
                'product_id' => 1,
                'function_id' => 6,
            ],
            [
                'product_id' => 1,
                'function_id' => 7,
            ],
            [
                'product_id' => 1,
                'function_id' => 8,
            ],
            [
                'product_id' => 1,
                'function_id' => 9,
            ],
            [
                'product_id' => 1,
                'function_id' => 10,
            ],
            [
                'product_id' => 1,
                'function_id' => 11,
            ],
            [
                'product_id' => 1,
                'function_id' => 12,
            ],
            [
                'product_id' => 1,
                'function_id' => 13,
            ],
            [
                'product_id' => 5,
                'function_id' => 1,
            ],
            [
                'product_id' => 5,
                'function_id' => 2,
            ],
            [
                'product_id' => 5,
                'function_id' => 3,
            ],
            [
                'product_id' => 5,
                'function_id' => 4,
            ],
            [
                'product_id' => 5,
                'function_id' => 5,
            ],
            [
                'product_id' => 5,
                'function_id' => 6,
            ],
            [
                'product_id' => 5,
                'function_id' => 7,
            ],
            [
                'product_id' => 5,
                'function_id' => 8,
            ],
            [
                'product_id' => 5,
                'function_id' => 9,
            ],
            [
                'product_id' => 5,
                'function_id' => 10,
            ],
            [
                'product_id' => 5,
                'function_id' => 11,
            ],
            [
                'product_id' => 5,
                'function_id' => 12,
            ],
            [
                'product_id' => 5,
                'function_id' => 13,
            ],

        ];

        foreach ($data as $item) {
            ProductFunction::upsert([
                'product_id' => $item['product_id'],
                'functions_id' => $item['function_id'],
            ],['product_id','functions_id']);
        }
    }
}
