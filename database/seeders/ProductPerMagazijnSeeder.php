<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPerMagazijnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_per_magazijn')->insert([
            [
                'product_id' => 1,
                'magazijn_id' => 1,
                'locatie' => 'Berlicum',
            ],
            [
                'product_id' => 2,
                'magazijn_id' => 2,
                'locatie' => 'Rosmalen',
            ],
            [
                'product_id' => 3,
                'magazijn_id' => 3,
                'locatie' => 'Berlicum',
            ],
            [
                'product_id' => 4,
                'magazijn_id' => 4,
                'locatie' => 'Berlicum',
            ],
            [
                'product_id' => 5,
                'magazijn_id' => 5,
                'locatie' => 'Rosmalen',
            ],
            [
                'product_id' => 6,
                'magazijn_id' => 6,
                'locatie' => 'Berlicum',
            ],
            [
                'product_id' => 7,
                'magazijn_id' => 7,
                'locatie' => 'Rosmalen',
            ],
            [
                'product_id' => 8,
                'magazijn_id' => 8,
                'locatie' => 'Sint-MichelsGestel',
            ],
            [
                'product_id' => 9,
                'magazijn_id' => 9,
                'locatie' => 'Sint-MichelsGestel',
            ],
            [
                'product_id' => 10,
                'magazijn_id' => 10,
                'locatie' => 'Middelrode',
            ],
            [
                'product_id' => 11,
                'magazijn_id' => 11,
                'locatie' => 'Middelrode',
            ],
            [
                'product_id' => 12,
                'magazijn_id' => 12,
                'locatie' => 'Middelrode',
            ],
            [
                'product_id' => 13,
                'magazijn_id' => 13,
                'locatie' => 'Schijndel',
            ],
            [
                'product_id' => 14,
                'magazijn_id' => 14,
                'locatie' => 'Schijndel',
            ],
            [
                'product_id' => 15,
                'magazijn_id' => 15,
                'locatie' => 'Gemonde',
            ],
            [
                'product_id' => 16,
                'magazijn_id' => 16,
                'locatie' => 'Gemonde',
            ],
            [
                'product_id' => 17,
                'magazijn_id' => 17,
                'locatie' => 'Gemonde',
            ],
            [
                'product_id' => 18,
                'magazijn_id' => 18,
                'locatie' => 'Gemonde',
            ],
            [
                'product_id' => 19,
                'magazijn_id' => 19,
                'locatie' => 'Den Bosch',
            ],
            [
                'product_id' => 20,
                'magazijn_id' => 20,
                'locatie' => 'Den Bosch',
            ],
            [
                'product_id' => 21,
                'magazijn_id' => 21,
                'locatie' => 'Den Bosch',
            ],
            [
                'product_id' => 22,
                'magazijn_id' => 22,
                'locatie' => 'Heeswijk Dinther',
            ],
            [
                'product_id' => 23,
                'magazijn_id' => 23,
                'locatie' => 'Heeswijk Dinther',
            ],
            [
                'product_id' => 24,
                'magazijn_id' => 24,
                'locatie' => 'Heeswijk Dinther',
            ],
            [
                'product_id' => 25,
                'magazijn_id' => 25,
                'locatie' => 'Vught',
            ],
            [
                'product_id' => 26,
                'magazijn_id' => 26,
                'locatie' => 'Vught',
            ],
            [
                'product_id' => 27,
                'magazijn_id' => 27,
                'locatie' => 'Vught',
            ],
            [
                'product_id' => 28,
                'magazijn_id' => 28,
                'locatie' => 'Vught',
            ],
            [
                'product_id' => 29,
                'magazijn_id' => 29,
                'locatie' => 'Vught',
            ],

        ]);
    }
}
