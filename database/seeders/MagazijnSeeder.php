<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MagazijnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('magazijn')->insert([
            [
                'ontvangstdatum' => '2024-05-12',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '5 kg',
                'aantal' => 20,
            ],
            [
                'ontvangstdatum' => '2024-05-26',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '2.5 kg',
                'aantal' => 40,
            ],
            [
                'ontvangstdatum' => '2024-04-02',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '1 kg',
                'aantal' => 30,
            ],
            [
                'ontvangstdatum' => '2024-05-16',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '1.5 kg',
                'aantal' => 25,
            ],
            [
                'ontvangstdatum' => '2024-05-23',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '4 stuks',
                'aantal' => 75,
            ],
            [
                'ontvangstdatum' => '2024-03-12',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '1 kg/tros',
                'aantal' => 60,
            ],
            [
                'ontvangstdatum' => '2024-03-19',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '2 kg/tros',
                'aantal' => 200,
            ],
            [
                'ontvangstdatum' => '2024-06-19',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '200 g',
                'aantal' => 45,
            ],
            [
                'ontvangstdatum' => '2024-07-23',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '100 g',
                'aantal' => 60,
            ],
            [
                'ontvangstdatum' => '2024-07-23',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '1 liter',
                'aantal' => 120,
            ],
            [
                'ontvangstdatum' => '2024-06-02',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '250 g',
                'aantal' => 80,
            ],
            [
                'ontvangstdatum' => '2024-01-04',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '6 stuks',
                'aantal' => 120,
            ],
            [
                'ontvangstdatum' => '2024-04-07',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '800 g',
                'aantal' => 220,
            ],
            [
                'ontvangstdatum' => '2024-04-04',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '1 stuk',
                'aantal' => 130,
            ],
            [
                'ontvangstdatum' => '2024-04-28',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '150 ml',
                'aantal' => 72,
            ],
            [
                'ontvangstdatum' => '2024-04-19',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '1 l',
                'aantal' => 12,
            ],
            [
                'ontvangstdatum' => '2024-04-23',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '250 g',
                'aantal' => 300,
            ],
            [
                'ontvangstdatum' => '2024-03-02',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '25 zakjes',
                'aantal' => 280,
            ],
            [
                'ontvangstdatum' => '2024-04-16',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '500 g',
                'aantal' => 330,
            ],
            [
                'ontvangstdatum' => '2024-04-25',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '1 kg',
                'aantal' => 34,
            ],
            [
                'ontvangstdatum' => '2024-04-13',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '50 g',
                'aantal' => 23,
            ],
            [
                'ontvangstdatum' => '2024-04-23',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '1 l',
                'aantal' => 46,
            ],
            [
                'ontvangstdatum' => '2024-04-21',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '250 ml',
                'aantal' => 98,
            ],
            [
                'ontvangstdatum' => '2024-04-30',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '1 potje',
                'aantal' => 56,
            ],
            [
                'ontvangstdatum' => '2024-04-27',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '1 l',
                'aantal' => 210,
            ],
            [
                'ontvangstdatum' => '2024-04-01',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '4 stuks',
                'aantal' => 24,
            ],
            [
                'ontvangstdatum' => '2024-04-07',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '300 g',
                'aantal' => 87,
            ],
            [
                'ontvangstdatum' => '2024-04-22',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '200 g',
                'aantal' => 230,
            ],
            [
                'ontvangstdatum' => '2024-04-21',
                'uitleveringsdatum' => null,
                'verpakkingseenheid' => '80 g',
                'aantal' => 30,
            ],
        ]);
    }
}
