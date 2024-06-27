<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'voornaam', 'tussenvoegsel', 'achternaam', 'geboortedatum', 'typepersoon', 'vertegenwoordiger',
        'straat', 'huisnummer', 'toevoeging', 'postcode', 'woonplaats', 'email', 'mobiel'
    ];


    public function gezins()
    {
        return $this->belongsToMany(Gezin::class, 'contact_per_gezins', 'contact_id', 'gezin_id');
    }
}
