<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(VolumenesTableSeeder::class);
        $this->call(DivisionesTableSeeder::class);
        $this->call(LibrosTableSeeder::class);
        $this->call(PartesTableSeeder::class);
        $this->call(CapitulosTableSeeder1::class);
        $this->call(CapitulosTableSeeder2::class);
        $this->call(PericopasTableSeeder::class);
    }
}
