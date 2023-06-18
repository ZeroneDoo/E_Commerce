<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'telpon' => '09238131',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ]);
            User::create([
                'name' => 'Adhen',
                'email' => 'adhen@gmail.com',
                'telpon' => '09232342131',
                'password' => Hash::make('password'),
                'role' => 'user'
            ]);
    }
}
