<?php

namespace Database\Seeders;


use App\Models\ProductCustom;
use App\Models\ProductMaterial;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ImageSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(CustomSeeder::class);
        $this->call(functionSeeder::class);
        $this->call(ProductFunctionSeeder::class);
        $this->call(ProductMaterialSeeder::class);
        $this->call(ProductCustomSeeder::class);
        $this->call(ProductSizeSeeder::class);
        $this->call(ProductTerialSeeder::class);
        $this->call(ProductColorSeeder::class);
        $this->call(ProductTitleSeeder::class);


//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
