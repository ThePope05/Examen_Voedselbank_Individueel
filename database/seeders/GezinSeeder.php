<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GezinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('gezinnen')->insert([
            [
                'naam' => 'ZevenhuizenGezin',
                'code' => 'G0001',
                'omschrijving' => 'Bijstandgezin',
                'aantal_volwassenen' => 2,
                'aantal_kinderen' => 2,
                'aantal_babys' => 0,
                'totaal_aantal_personen' => 4,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'naam' => 'BergkampGezin',
                'code' => 'G0002',
                'omschrijving' => 'Bijstandgezin',
                'aantal_volwassenen' => 2,
                'aantal_kinderen' => 1,
                'aantal_babys' => 1,
                'totaal_aantal_personen' => 4,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'naam' => 'HeuvelGezin',
                'code' => 'G0003',
                'omschrijving' => 'Bijstandgezin',
                'aantal_volwassenen' => 2,
                'aantal_kinderen' => 0,
                'aantal_babys' => 0,
                'totaal_aantal_personen' => 2,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'naam' => 'ScherderGezin',
                'code' => 'G0004',
                'omschrijving' => 'Bijstandgezin',
                'aantal_volwassenen' => 1,
                'aantal_kinderen' => 0,
                'aantal_babys' => 2,
                'totaal_aantal_personen' => 3,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'naam' => 'DeJongGezin',
                'code' => 'G0005',
                'omschrijving' => 'Bijstandgezin',
                'aantal_volwassenen' => 1,
                'aantal_kinderen' => 1,
                'aantal_babys' => 0,
                'totaal_aantal_personen' => 2,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ],
            [
                'naam' => 'VanderBergGezin',
                'code' => 'G0006',
                'omschrijving' => 'AlleenGaande',
                'aantal_volwassenen' => 1,
                'aantal_kinderen' => 0,
                'aantal_babys' => 0,
                'totaal_aantal_personen' => 1,
                'datum_aangemaakt' => now(),
                'datum_gewijzigd' => now(),
            ]
        ]);
    }
}
