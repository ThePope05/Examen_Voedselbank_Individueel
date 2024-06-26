<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergiePerPersoonSeeder extends Seeder
{
    public function run()
    {
        DB::table('allergie_per_persoon')->insert([
            [
                'persoon_id' => 4,
                'allergie_id' => 1,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 5,
                'allergie_id' => 2,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 6,
                'allergie_id' => 3,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 7,
                'allergie_id' => 4,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 8,
                'allergie_id' => 3,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 9,
                'allergie_id' => 2,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 10,
                'allergie_id' => 5,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 12,
                'allergie_id' => 2,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 13,
                'allergie_id' => 4,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 14,
                'allergie_id' => 1,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 15,
                'allergie_id' => 3,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 16,
                'allergie_id' => 5,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 17,
                'allergie_id' => 1,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 17,
                'allergie_id' => 2,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 18,
                'allergie_id' => 4,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'persoon_id' => 19,
                'allergie_id' => 4,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
        ]);
    }
}
