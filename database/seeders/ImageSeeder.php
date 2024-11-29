<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'image' => 'product1.jpg',
                'product_id' => 1,
            ],
            [
                'image' => 'BlackT-shirt1.png',
                'product_id' => 2,
            ],
            [
                'image' => 'WhiteT-Shirt1.png',
                'product_id' => 2,
            ],
            [
                'image' => 'WhiteT-shirt2.png',
                'product_id' => 2,
            ],
            [
                'image' => 'IroniTshirt1.png',
                'product_id' => 3,
            ],
            [
                'image' => 'IroniTshirt2.png',
                'product_id' => 3,
            ],
            [
                'image' => 'IroniTshirt3.png',
                'product_id' => 3,
            ],
            [
                'image' => 'spotifylogo.jpg',
                'product_id' => 4,
            ],
            [
                'image' => 'spotifylogo.jpg',
                'product_id' => 5,
            ]
        ];

        foreach ($data as $key => $image) {
            ProductImage::upsert([
                'id' => $key + 1,
                'image' => $image['image'],
                'product_id' => $image['product_id'],
            ],['id']);
        }
    }
}
