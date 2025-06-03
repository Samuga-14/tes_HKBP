<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       User::create([
        'name' => 'Admin Utama',
        'email' => 'hkbp@example.com',
        'password' => Hash::make('hkbp123'), // Ganti dengan password yang lo mau
    ]);
        User::create([
        'name' => 'Admin',
        'email' => 'admin1@example.com',
        'password' => Hash::make('adminhkbp123'),
    ]);

        User::create([
        'name' => 'Admin HKBP',
        'email' => 'adminhkbp@example.com',
        'password' => Hash::make('admin123'),
    ]);
    }
}
