<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Product;
use App\Models\Leverancier;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Producten toevoegen
        Product::insert([
            [
                'categorie_id' => 1,
                'naam' => 'Aardappel',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Kruimige aardappel',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 1,
                'naam' => 'Aardappel',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Kruimige aardappel',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 1,
                'naam' => 'Ui',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Gele ui',
                'status' => 'NietOpVoorraad',
            ],
            [
                'categorie_id' => 1,
                'naam' => 'Appel',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Granny Smith',
                'status' => 'NietLeverbaar',
            ],
            [
                'categorie_id' => 1,
                'naam' => 'Appel',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Granny Smith',
                'status' => 'NietLeverbaar',
            ],
            [
                'categorie_id' => 1,
                'naam' => 'Banaan',
                'soort_allergie' => 'Banaan',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Biologische Banaan',
                'status' => 'OverHoudbaarheidsDatum',
            ],
            [
                'categorie_id' => 1,
                'naam' => 'Banaan',
                'soort_allergie' => 'Banaan',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Biologische Banaan',
                'status' => 'OverHoudbaarheidsDatum',
            ],
            [
                'categorie_id' => 2,
                'naam' => 'Kaas',
                'soort_allergie' => 'Lactose',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Jonge Kaas',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 2,
                'naam' => 'Rosbief',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Rundvlees',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 3,
                'naam' => 'Melk',
                'soort_allergie' => 'Lactose',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Halfvolle Melk',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 3,
                'naam' => 'Margarine',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Plantaardige Boter',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 3,
                'naam' => 'Ei',
                'soort_allergie' => 'Eier',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Scharrelei',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 4,
                'naam' => 'Brood',
                'soort_allergie' => 'Gluten',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Volkoren Brood',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 4,
                'naam' => 'Gevulde Koek',
                'soort_allergie' => 'Amandel',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Banketbakkers kwailiteit',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 5,
                'naam' => 'Fristi',
                'soort_allergie' => 'Lactose',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Frisdrank',
                'status' => 'NieOpVoorraad',
            ],
            [
                'categorie_id' => 5,
                'naam' => 'Appelsap',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => '100% vruchtensap',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 5,
                'naam' => 'Koffie',
                'soort_allergie' => 'Cafeine',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Arabica koffie',
                'status' => 'OverHoudbaarheidsDatum',
            ],
            [
                'categorie_id' => 5,
                'naam' => 'Thee',
                'soort_allergie' => 'Theine',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Ceylon thee',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 6,
                'naam' => 'Pasta',
                'soort_allergie' => 'Gluten',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Macaroni',
                'status' => 'NietLeverbaar',
            ],
            [
                'categorie_id' => 6,
                'naam' => 'Rijst',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Basmati Rijst',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 6,
                'naam' => 'Knorr Nasi mix',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Nasi kruiden',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 7,
                'naam' => 'Tomatensoep',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Romige Tomatensoep',
                'status' => 'OpVooraad',
            ],
            [
                'categorie_id' => 7,
                'naam' => 'Tomatensaus',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Pizza saus',
                'status' => 'NietOpVoorraad',
            ],
            [
                'categorie_id' => 7,
                'naam' => 'Peterselie',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Verse kruidenpot',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 8,
                'naam' => 'Olie',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Olijfolie',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 8,
                'naam' => 'Mars',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Snoep',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 8,
                'naam' => 'Biscuit',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'San Francisco biscuit',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 8,
                'naam' => 'Paprika Chips',
                'soort_allergie' => null,
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Ribbelchips paprika',
                'status' => 'OpVoorraad',
            ],
            [
                'categorie_id' => 8,
                'naam' => 'Chocolade reep',
                'soort_allergie' => 'Cacoa',
                'barcode' => '87195' . mt_rand(10000000, 99999999),
                'houdbaarheidsdatum' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'omschrijving' => 'Tony chocolonely',
                'status' => 'OpVoorraad',
            ],
        ]);

        // Leveranciers toevoegen
        Leverancier::insert([
            [
                'naam' => 'Albert Heijn',
                'contact_persoon' => 'Ruud te Weijden',
                'leverancier_nummer' => 'L0001',
                'leverancier_type' => 'Bedrijf',
            ],
            [
                'naam' => 'Albertus Kerk',
                'contact_persoon' => 'Leo Pastoor',
                'leverancier_nummer' => 'L0002',
                'leverancier_type' => 'Instelling',
            ],
            [
                'naam' => 'Gemeente Utrecht',
                'contact_persoon' => 'Mohammed Yazidi',
                'leverancier_nummer' => 'L0003',
                'leverancier_type' => 'Overheid',
            ],
            [
                'naam' => 'Boerdereij Meerhoven',
                'contact_persoon' => 'Bertus van Driel',
                'leverancier_nummer' => 'L0004',
                'leverancier_type' => 'Particulier',
            ],
            [
                'naam' => 'Jan van der Heijden',
                'contact_persoon' => 'Jan van der Heijden',
                'leverancier_nummer' => 'L0005',
                'leverancier_type' => 'Donor',
            ],
            [
                'naam' => 'Vomar',
                'contact_persoon' => 'Jaco Pastorius',
                'leverancier_nummer' => 'L0006',
                'leverancier_type' => 'Bedrijf',
            ],
            [
                'naam' => 'DekaMarkt',
                'contact_persoon' => 'Sil den Dollaard',
                'leverancier_nummer' => 'L0007',
                'leverancier_type' => 'Bedrijf',
            ],
            [
                'naam' => 'Gemeente Vught',
                'contact_persoon' => 'Jan Blokker',
                'leverancier_nummer' => 'L0008',
                'leverancier_type' => 'Overheid',
            ]
        ]);

        //we maken een lijst van leveranciers en producten id's
        $pairs = [
            [4, 1],
            [4, 2],
            [2, 3],
            [1, 4],
            [4, 5],
            [1, 6],
            [4, 7],
            [4, 8],
            [4, 9],
            [3, 10],
            [3, 11],
            [3, 12],
            [3, 13],
            [2, 14],
            [2, 15],
            [1, 16],
            [1, 17],
            [1, 18],
            [1, 19],
            [4, 20],
            [2, 21],
            [1, 22],
            [3, 23],
            [3, 24],
            [1, 25],
            [2, 26],
        ];

        // Die worden geformatteerd en in de database gestopt
        $data = [];

        foreach ($pairs as $pair) {
            $data[] = [
                'leverancier_id' => $pair[0],
                'product_id' => $pair[1],
                'datum_aangeleverd' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'datum_eerst_volgende_levering' => '2024-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
            ];
        }

        // Producten per leverancier toevoegen zonder model
        DB::table('product_per_leveranciers')->insert($data);

        Contact::insert([
            [
                'straat' => 'Prinses Irenestraat',
                'huisnummer' => '12',
                'toevoeging' => 'a',
                'postcode' => '5271TH',
                'woonplaats' => 'Maaskantje',
                'email' => 'j.van.zevenhuizen@gmail.com',
                'mobiel' => '+31 6234561123'
            ],
            [
                'straat' => 'Gibraltarstraat',
                'huisnummer' => '234',
                'toevoeging' => null,
                'postcode' => '5271TJ',
                'woonplaats' => 'Maaskantje',
                'email' => 'a.bergkamp@hotmail.com',
                'mobiel' => '+31 6234561123'
            ],
            [
                'straat' => 'Der Kinderenstraat',
                'huisnummer' => '456',
                'toevoeging' => 'Bis',
                'postcode' => '5271TH',
                'woonplaats' => 'Maaskantje',
                'email' => 's.van.de.heuvel@gmail.com',
                'mobiel' => '+31 6234561123'
            ],
            [
                'straat' => 'Nachtegaalstraat',
                'huisnummer' => '233',
                'toevoeging' => 'a',
                'postcode' => '5271TJ',
                'woonplaats' => 'Maaskantje',
                'email' => 'e.scherder@gmail.com',
                'mobiel' => '+31 6234561123'
            ],
            [
                'straat' => 'Bertram Russellstraat',
                'huisnummer' => '45',
                'toevoeging' => null,
                'postcode' => '5271TH',
                'woonplaats' => 'Maaskantje',
                'email' => 'f.de.jong@hotmail.com',
                'mobiel' => '+31 6234561123'
            ],
            [
                'straat' => 'Leanardo Da Vincihof',
                'huisnummer' => '34',
                'toevoeging' => null,
                'postcode' => '5271ZE',
                'woonplaats' => 'Maaskantje',
                'email' => 'h.van.der.berg@gmail.com',
                'mobiel' => '+31 6234561123'
            ],
            [
                'straat' => 'Siegfried Knutsenlaan',
                'huisnummer' => '234',
                'toevoeging' => null,
                'postcode' => '5271ZE',
                'woonplaats' => 'Maaskantje',
                'email' => 'r.ter.weijden@ah.nl',
                'mobiel' => '+31 6234561123'
            ],
            [
                'straat' => 'Theo de Bokstraat',
                'huisnummer' => '256',
                'toevoeging' => null,
                'postcode' => '5271ZH',
                'woonplaats' => 'Maaskantje',
                'email' => 'I.pastoor@gmail.com',
                'mobiel' => '+31 6234561123'
            ],
            [
                'straat' => 'Meester van Leerhof',
                'huisnummer' => '2',
                'toevoeging' => 'a',
                'postcode' => '5271ZH',
                'woonplaats' => 'Maaskantje',
                'email' => 'm.yazidi@gemeenteutrecht.nl',
                'mobiel' => '+31 6234561123'
            ],
            [
                'straat' => 'Van Wemelenplantsoen',
                'huisnummer' => '300',
                'toevoeging' => null,
                'postcode' => '5271TH',
                'woonplaats' => 'Maaskantje',
                'email' => 'b.van.driel@gmail.com',
                'mobiel' => '+31 6234561123'
            ],
            [
                'straat' => 'Terlingenhof',
                'huisnummer' => '20',
                'toevoeging' => null,
                'postcode' => '5271TH',
                'woonplaats' => 'Maaskantje',
                'email' => 'j.pastorius@gmail.com',
                'mobiel' => '+31 6234561356'
            ],
            [
                'straat' => 'Veldhoen',
                'huisnummer' => '31',
                'toevoeging' => null,
                'postcode' => '5271ZE',
                'woonplaats' => 'Maaskantje',
                'email' => 's.dollaard@gmail.com',
                'mobiel' => '+31 6234561314'
            ],
            [
                'straat' => 'ScheringaDreef',
                'huisnummer' => '37',
                'toevoeging' => null,
                'postcode' => '5271ZE',
                'woonplaats' => 'Vught',
                'email' => 'j.blokker@gemeentevught.nl',
                'mobiel' => '+31 6234561314'
            ]
        ]);

        //we maken een lijst van contacten en leveranciers id's
        $pairs = [
            [1, 7],
            [2, 8],
            [3, 9],
            [4, 10],
            [6, 11],
            [7, 12],
            [8, 13]
        ];

        // Die worden geformatteerd en in de database gestopt
        $data = [];

        foreach ($pairs as $pair) {
            $data[] = [
                'leverancier_id' => $pair[0],
                'contact_id' => $pair[1],
            ];
        }

        // Contacten per leverancier toevoegen zonder model
        DB::table('contact_per_leveranciers')->insert($data);
    }
}
