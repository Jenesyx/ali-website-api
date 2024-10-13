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
                'type' => 'digital',
                'status' => 1
            ],
            [
                'id' => 2,
                'title' => 'ClothesProduct',
                'description' => 'Special and Unique T-Shirt',
                'price' => 35,
                'type' => 'physical',
                'status' => 1
            ],
            [
                'id' => 3,
                'title' => 'Ironi T-Shirt',
                'description' => 'Special and Unique T-Shirt',
                'price' => 35,
                'type' => 'physical',
                'status' => 1
            ],
            [
                'id' => 4,
                'title' => 'Spotify',
                'description' => 'Spotify Membership for better price',
                'price' => 9,
                'type' => 'digital',
                'status' => 1
            ],
            [
                'id' => 5,
                'title' => 'RFID Stand',
                'description' => 'Customizable',
                'price' => 20,
                'type' => 'digital',
                'status' => 1
            ],
        ];
        for ($i = 0; $i < 5; $i++) {
            Product::upsert([
                'id' => $data[$i]['id'],
                'title' => $data[$i]['title'],
                'description' => $data[$i]['description'],
                'price' => $data[$i]['price'],
                'type' => $data[$i]['type'],
                'status' => $data[$i]['status'],
            ],['id','title', 'description', 'price', 'type', 'status']);
        }
    }
}
