<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $contacts = [
            ['straat' => 'Prinses Irenestraat', 'huisnummer' => 12, 'toevoeging' => 'A', 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'email' => 'j.vanzevenhuizen@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Gibraltarstraat', 'huisnummer' => 234, 'toevoeging' => null, 'postcode' => '5271TJ', 'woonplaats' => 'Maaskantje', 'email' => 'a.bergkamp@hotmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Der Kinderenstraat', 'huisnummer' => 456, 'toevoeging' => 'Bis', 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'email' => 's.van.de.heuvel@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Nachtegaalstraat', 'huisnummer' => 233, 'toevoeging' => 'A', 'postcode' => '5271TJ', 'woonplaats' => 'Maaskantje', 'email' => 'e.scherder@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Bertram Russellstraat', 'huisnummer' => 45, 'toevoeging' => null, 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'email' => 'f.de.jong@hotmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Leonardo Da Vincihof', 'huisnummer' => 34, 'toevoeging' => null, 'postcode' => '5271ZE', 'woonplaats' => 'Maaskantje', 'email' => 'h.van.der.berg@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Siegfried Knutsenlaan', 'huisnummer' => 234, 'toevoeging' => null, 'postcode' => '5271ZE', 'woonplaats' => 'Maaskantje', 'email' => 'r.ter.weiden@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Theo de Bokstraat', 'huisnummer' => 256, 'toevoeging' => null, 'postcode' => '5271ZH', 'woonplaats' => 'Maaskantje', 'email' => 'i.pastoor@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Meester van Leerhof', 'huisnummer' => 2, 'toevoeging' => 'A', 'postcode' => '5271ZH', 'woonplaats' => 'Maaskantje', 'email' => 'm.yazid@gemeenteutrecht.nl', 'mobiel' => '+31 623456123'],
            ['straat' => 'Van Wemelenplantsoen', 'huisnummer' => 300, 'toevoeging' => null, 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'email' => 'b.van.driel@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Terlingenhof', 'huisnummer' => 20, 'toevoeging' => null, 'postcode' => '5271TH', 'woonplaats' => 'Maaskantje', 'email' => 'j.pastorius@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'Veldhoen', 'huisnummer' => 31, 'toevoeging' => null, 'postcode' => '5271ZE', 'woonplaats' => 'Maaskantje', 'email' => 's.dollaard@gmail.com', 'mobiel' => '+31 623456123'],
            ['straat' => 'ScheringaDreed', 'huisnummer' => 37, 'toevoeging' => null, 'postcode' => '5271ZE', 'woonplaats' => 'Vught', 'email' => 'j.blokker@gemeentevught.nl', 'mobiel' => '+31 623456134']
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
