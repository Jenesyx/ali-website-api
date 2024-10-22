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
                'info' =>  null,
                'price' => 15,
                'type' => 'digital',
                'status' => 1
            ],
            [
                'id' => 2,
                'title' => 'Infinity T-shirt',
                'info' => "This is one of those t-shirts that you have to buy when you see it! This logo was designed by Alijenesyx with inspiration from the Persian calligraphy font along with Ali's own creativity, which depicts the hardships he went through in his life in every line of this logo. Everyone gives beauty to this t-shirt with their own personality and makes it unique. Although this logo is Ali himself, it got the name infinity because of drawing the twist of the world.",
                'description' => 'Special and Unique T-Shirt',
                'price' => 35,
                'type' => 'physical',
                'status' => 1
            ],
            [
                'id' => 3,
                'title' => 'Ironi T-Shirt',
                'info' => "It says Ironi! It means a legit Persian! So, you have to be e Persian!",
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
                'info' => null,
                'type' => 'digital',
                'status' => 1
            ],
            [
                'id' => 5,
                'title' => 'RFID Stand',
                'description' => 'Customizable',
                'info' => null,
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
                'info' => $data[$i]['info'],
                'type' => $data[$i]['type'],
                'status' => $data[$i]['status'],
            ],['id','title', 'description', 'price', 'type', 'status']);
        }
    }
}
