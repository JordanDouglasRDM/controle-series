<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();
         User::create([
             'name' => 'Jordan Douglas',
             'email' => 'jordandouglas8515@gmail.com',
             'email_verified_at' => now(),
             'password' => Hash::make('admin'), // password
         ]);
    }
}
