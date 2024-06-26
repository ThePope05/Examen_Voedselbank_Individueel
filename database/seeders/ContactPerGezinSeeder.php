<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactPerGezinSeeder extends Seeder
{
    public function run()
    {
        $contactPerGezin = [
            ['gezin_id' => 1, 'contact_id' => 1],
            ['gezin_id' => 2, 'contact_id' => 2],
            ['gezin_id' => 3, 'contact_id' => 3],
            ['gezin_id' => 4, 'contact_id' => 4],
            ['gezin_id' => 5, 'contact_id' => 5],
            ['gezin_id' => 6, 'contact_id' => 6]
        ];

        foreach ($contactPerGezin as $relation) {
            DB::table('contact_per_gezins')->insert($relation);
        }
    }
}
