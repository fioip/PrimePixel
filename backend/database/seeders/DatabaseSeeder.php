<?php

namespace Database\Seeders;
use Database\Seeders\CameraSeeder;
use Database\Seeders\LensSeeder;
use Database\Seeders\MemoryCardSeeder;
use Database\Seeders\LightsSeeder;

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

        $this->call([
            CameraSeeder::class,
            LensSeeder::class,
            MemoryCardSeeder::class,
            LightsSeeder::class,
        ]);
    }
}
