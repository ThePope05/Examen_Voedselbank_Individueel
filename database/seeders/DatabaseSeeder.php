<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            GezinSeeder::class,
            PersoonSeeder::class,
            ContactSeeder::class,
            ContactPerGezinSeeder::class,
        ]);
    }
}
