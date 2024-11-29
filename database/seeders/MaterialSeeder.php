<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Plastic',
                'description' => 'Experience the sleek functionality of our black PVC RFID card. Crafted from durable, high-quality material, this card effortlessly combines practicality with style. Its robust PVC composition ensures long-lasting performance, while the elegant black finish makes it a sophisticated choice for professionals and tech enthusiasts alike.',
                'subprice'=> 15,
            ],
            [
                'id' => 2,
                'name' => 'Metal',
                'description' => "Elevate your professional presence with our premium black metal RFID card. Designed for discerning individuals who seek the best, this card is the epitome of chic sophistication. The metal build not only adds a layer of durability but also exudes an aura of high-end allure. This card feels substantial in hand, reassuringly solid, and its sleek black design guarantees you'll make a memorable impression.",
                "subprice"=> 35,
            ],
        ];

        for ($i = 0; $i < 2; $i++) {
           Material::upsert([
               'id' => $data[$i]['id'],
               'name' => $data[$i]['name'],
               'description' => $data[$i]['description'],
               'subprice' =>$data[$i]['subprice'],
           ],['id', 'name', 'description', 'subprice']);
        }
    }
}
