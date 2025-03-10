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
        $this->call(class: VolumenesTableSeeder::class);
        $this->call(DivisionesTableSeeder::class);
        $this->call(LibrosTableSeeder::class);
        $this->call(PartesTableSeeder::class);
        $this->call(CapitulosTableSeeder1::class);
        $this->call(CapitulosTableSeeder2::class);
        $this->call(PericopasTableSeeder::class);
        $this->call(VersiculosTableSeeder1::class);
        $this->call(VersiculosTableSeeder2::class);
        $this->call(VersiculosTableSeeder3::class);
        $this->call(VersiculosTableSeeder4::class);
        $this->call(VersiculosTableSeeder5::class);
        $this->call(VersiculosTableSeeder6::class);
        $this->call(VersiculosTableSeeder7::class);
        $this->call(VersiculosTableSeeder8::class);
        $this->call(VersiculosTableSeeder9::class);
    }
}
