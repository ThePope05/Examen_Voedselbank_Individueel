<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persoon;

class PersoonSeeder extends Seeder
{
    public function run()
    {
        $people = [
            ['gezin_id' => null, 'voornaam' => 'Hans', 'tussenvoegsel' => 'van', 'achternaam' => 'Leeuwen', 'geboortedatum' => '1958-02-12', 'type_persoon' => 'Manager', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => null, 'voornaam' => 'Jan', 'tussenvoegsel' => 'van der', 'achternaam' => 'Sluijs', 'geboortedatum' => '1993-04-30', 'type_persoon' => 'Medewerker', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => null, 'voornaam' => 'Herman', 'tussenvoegsel' => 'den', 'achternaam' => 'Duiker', 'geboortedatum' => '1989-08-30', 'type_persoon' => 'Vrijwilliger', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => 1, 'voornaam' => 'Johan', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '1995-05-12', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 1],
            ['gezin_id' => 1, 'voornaam' => 'Sarah', 'tussenvoegsel' => 'den', 'achternaam' => 'Dolder', 'geboortedatum' => '1985-03-23', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => 1, 'voornaam' => 'Theo', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '2010-09-20', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => 1, 'voornaam' => 'Jantien', 'tussenvoegsel' => 'van', 'achternaam' => 'Zevenhuizen', 'geboortedatum' => '2015-09-20', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => 2, 'voornaam' => 'Arjan', 'tussenvoegsel' => 'NULL', 'achternaam' => 'Bergkamp', 'geboortedatum' => '1969-05-11', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 1],
            ['gezin_id' => 2, 'voornaam' => 'Janneke', 'tussenvoegsel' => 'NULL', 'achternaam' => 'Sanders', 'geboortedatum' => '1969-05-11', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => 2, 'voornaam' => 'Stein', 'tussenvoegsel' => 'NULL', 'achternaam' => 'Bergkamp', 'geboortedatum' => '2002-02-05', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => 2, 'voornaam' => 'Judith', 'tussenvoegsel' => 'NULL', 'achternaam' => 'Bergkamp', 'geboortedatum' => '2022-05-01', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => 3, 'voornaam' => 'Mazin', 'tussenvoegsel' => 'van', 'achternaam' => 'Vliet', 'geboortedatum' => '1968-08-18', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => 3, 'voornaam' => 'Selma', 'tussenvoegsel' => 'van de', 'achternaam' => 'Heuvel', 'geboortedatum' => '1996-04-07', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 1],
            ['gezin_id' => 4, 'voornaam' => 'Eva', 'tussenvoegsel' => 'NULL', 'achternaam' => 'Scherder', 'geboortedatum' => '2021-11-19', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 1],
            ['gezin_id' => 4, 'voornaam' => 'Felicia', 'tussenvoegsel' => 'NULL', 'achternaam' => 'Scherder', 'geboortedatum' => '2024-03-01', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => 4, 'voornaam' => 'Devin', 'tussenvoegsel' => 'NULL', 'achternaam' => 'Scherder', 'geboortedatum' => '1980-09-04', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => 5, 'voornaam' => 'Frieda', 'tussenvoegsel' => 'de', 'achternaam' => 'Jong', 'geboortedatum' => '2018-05-23', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 1],
            ['gezin_id' => 5, 'voornaam' => 'Simeon', 'tussenvoegsel' => 'de', 'achternaam' => 'Jong', 'geboortedatum' => '2018-05-29', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 0],
            ['gezin_id' => 6, 'voornaam' => 'Hanna', 'tussenvoegsel' => 'van der', 'achternaam' => 'Berg', 'geboortedatum' => '1999-09-09', 'type_persoon' => 'Klant', 'is_vertegenwoordiger' => 1],
        ];

        foreach ($people as $person) {
            Persoon::create($person);
        }
    }
}
