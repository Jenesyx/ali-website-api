<?php

namespace Database\Seeders;

use App\Models\Custom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Yes',
                'description' => 'You can have your own Logo or design on the Card, if you dont have any, there is no problem, because we can design for you!',
                'subprice'=> 8,
            ],
            [
                'id' => 2,
                'name' => 'No',
                'description' => "Without any logo or design",
                "subprice"=> 0,
            ],
        ];

        for ($i = 0; $i < 2; $i++) {
            Custom::upsert([
                'id' => $data[$i]['id'],
                'name' => $data[$i]['name'],
                'description' => $data[$i]['description'],
                'subprice' =>$data[$i]['subprice'],
            ],['id', 'name', 'description', 'subprice']);
        }
    }
}
