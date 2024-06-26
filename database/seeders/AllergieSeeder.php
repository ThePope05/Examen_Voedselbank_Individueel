<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergieSeeder extends Seeder
{
    public function run()
    {
        DB::table('allergie')->insert([
            [
                'naam' => 'Gluten',
                'omschrijving' => 'Allergisch voor Gluten',
                'anafylactisch_risico' => 'zeer laag',
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'naam' => 'Pindas',
                'omschrijving' => 'Allergisch voor Pindas',
                'anafylactisch_risico' => 'hoog',
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'naam' => 'Schaaldieren',
                'omschrijving' => 'Allergisch voor Schaaldieren',
                'anafylactisch_risico' => 'Redelijk hoog',
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'naam' => 'Hazelnoten',
                'omschrijving' => 'Allergisch voor Hazelnoten',
                'anafylactisch_risico' => 'laag',
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'naam' => 'Lactose',
                'omschrijving' => 'Allergisch voor Lactose',
                'anafylactisch_risico' => 'zeer laag',
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'naam' => 'Soja',
                'omschrijving' => 'Allergisch voor Soja',
                'anafylactisch_risico' => 'zeer laag',
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
        ]);
    }
}
