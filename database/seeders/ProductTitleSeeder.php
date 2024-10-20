<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_id' => 2,
                'titles' => [
                    'Infinity T-Shirt',
                    'Infinity',
                    'T-shirt'
                ],
            ],
            [
                'product_id' => 3,
                'titles' => [
                    'Ironi T-Shirt',
                    'Ironi',
                    'T-shirt'
                ]
            ],
            [
                'product_id' => 4,
                'titles' => [
                    'Spotify',
                    'Membership'
                ]
            ]

        ];

        foreach ($data as $key => $item) {
            foreach ($item['titles'] as $title) {
                \App\Models\ProductTitle::upsert([
                    'id' => $key + 1,
                    'product_id' => $item['product_id'],
                    'title' => $title
                ], ['id','product_id', 'title']);
            }
        }
    }
}
