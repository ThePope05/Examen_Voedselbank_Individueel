<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gezin;

class GezinSeeder extends Seeder
{
    public function run()
    {
        Gezin::create([
            'naam' => 'ZevenhuizenGezin',
            'code' => 'G0001',
            'eetwens_per_gezin' => 'Bijstandsgezin',
            'aantal_volwassenen' => 2,
            'aantal_kinderen' => 2,
            'aantal_babys' => 0,
            'totaal_aantal_personen' => 4
        ]);

        Gezin::create([
            'naam' => 'BergkampGezin',
            'code' => 'G0002',
            'eetwens_per_gezin' => 'Bijstandsgezin',
            'aantal_volwassenen' => 2,
            'aantal_kinderen' => 1,
            'aantal_babys' => 1,
            'totaal_aantal_personen' => 4
        ]);

        Gezin::create([
            'naam' => 'HeuvelGezin',
            'code' => 'G0003',
            'eetwens_per_gezin' => 'Bijstandsgezin',
            'aantal_volwassenen' => 2,
            'aantal_kinderen' => 0,
            'aantal_babys' => 0,
            'totaal_aantal_personen' => 2
        ]);

        Gezin::create([
            'naam' => 'ScherderGezin',
            'code' => 'G0004',
            'eetwens_per_gezin' => 'Bijstandsgezin',
            'aantal_volwassenen' => 1,
            'aantal_kinderen' => 0,
            'aantal_babys' => 2,
            'totaal_aantal_personen' => 3
        ]);

        Gezin::create([
            'naam' => 'DeJongGezin',
            'code' => 'G0005',
            'eetwens_per_gezin' => 'Bijstandsgezin',
            'aantal_volwassenen' => 1,
            'aantal_kinderen' => 1,
            'aantal_babys' => 0,
            'totaal_aantal_personen' => 2
        ]);

        Gezin::create([
            'naam' => 'VanderBergGezin',
            'code' => 'G0006',
            'eetwens_per_gezin' => 'AlleenGaande',
            'aantal_volwassenen' => 1,
            'aantal_kinderen' => 0,
            'aantal_babys' => 0,
            'totaal_aantal_personen' => 1
        ]);
    }
}
