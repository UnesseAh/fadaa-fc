<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Session;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            ServiceSeeder::class,
            StudentSeeder::class,
            FormationSeeder::class,
            SessionSeeder::class,
            ServiceSessionSeeder::class,

        ]);
    }
}
