<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@ecommerce.test',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Editor Content',
            'email' => 'editor@ecommerce.test',
            'password' => Hash::make('password123'),
            'role' => 'editor',
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@ecommerce.test',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@ecommerce.test',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);
    }
}
