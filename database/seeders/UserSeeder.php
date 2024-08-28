<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::upsert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make(123456),
            'is_admin' => 1,
        ],['id', 'name', 'email', 'password', 'is_admin']);
    }
}
