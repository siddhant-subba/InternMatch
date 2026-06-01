<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create an Admin account
        User::create([
            'name' => 'Admin Boss',
            'email' => 'admin@internmatch.com',
            'password' => Hash::make('password123'),
            'is_admin' => true,
        ]);

        // 2. Create a Regular User account
        User::create([
            'name' => 'Sidhant Student',
            'email' => 'user@internmatch.com',
            'password' => Hash::make('password123'),
            'is_admin' => false,
        ]);

        // 3. Call your mock internship positions injector
        $this->call([
            InternshipSeeder::class,
        ]);
    }
}