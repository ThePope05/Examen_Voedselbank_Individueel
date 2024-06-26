<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorie')->insert([
            [
                'naam' => 'AGF',
                'omschrijving' => 'Aardappelen, groenten en fruit',
            ],
            [
                'naam' => 'KV',
                'omschrijving' => 'Kaas en vleeswaren',
            ],
            [
                'naam' => 'ZPE',
                'omschrijving' => 'Zuivel, plantaardig en eieren',
            ],
            [
                'naam' => 'BB',
                'omschrijving' => 'Bakkerij en Banket',
            ],
            [
                'naam' => 'FSKT',
                'omschrijving' => 'Frisdranken, sappen, koffie en thee',
            ],
            [
                'naam' => 'PRW',
                'omschrijving' => 'Pasta, rijst en wereldkeuken',
            ],
            [
                'naam' => 'SSKO',
                'omschrijving' => 'Soepen, sauzen, kruiden en olie',
            ],
            [
                'naam' => 'SKCC',
                'omschrijving' => 'Snoep, koek, chips en chocolade',
            ],
            [
                'naam' => 'BVH',
                'omschrijving' => 'Baby, verzorging en hygiëne',
            ]
        ]);
    }
}
