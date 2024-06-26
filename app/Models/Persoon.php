<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    protected $table = 'personen';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'gezin_id', 'voornaam', 'tussenvoegsel', 'achternaam', 'geboorte_datum', 'type_persoon',
        'is_vertegenwoordiger', 'is_actief', 'opmerking', 'datum_aangemaakt', 'datum_gewijzigd'
    ];

    public function gezin()
    {
        return $this->belongsTo(Gezin::class, 'gezin_id', 'id');
    }

    public function allergieen()
    {
        return $this->belongsToMany(Allergie::class, 'allergie_per_persoon', 'persoon_id', 'allergie_id')
                    ->withPivot('id', 'is_actief', 'opmerking', 'datum_aangemaakt', 'datum_gewijzigd');
    }
}
