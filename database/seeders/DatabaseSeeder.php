<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        Produks::factory(50)->create();
//       \App\Models\Main\Produks::factory(50)->create();
        User::factory()->create([
            'name' => 'Dery Supriady',
            'email' => 'test@example.com',
            'username' => 'derysupriady',
            'password' => bcrypt('password'),
        ]);
    }
}
