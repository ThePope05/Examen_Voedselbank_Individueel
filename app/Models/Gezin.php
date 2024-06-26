<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gezin extends Model
{
    protected $table = 'gezinnen';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'naam', 'code', 'omschrijving', 'aantal_volwassenen', 'aantal_kinderen', 'aantal_babys',
        'totaal_aantal_personen', 'is_actief', 'opmerking', 'datum_aangemaakt', 'datum_gewijzigd'
    ];

    public function personen()
    {
        return $this->hasMany(Persoon::class, 'gezin_id', 'id');
    }
}
