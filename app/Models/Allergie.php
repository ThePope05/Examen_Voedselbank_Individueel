<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allergie extends Model
{
    protected $table = 'allergie';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'naam', 'omschrijving', 'anafylactisch_risico', 'is_actief', 'opmerking', 'datum_aangemaakt', 'datum_gewijzigd'
    ];

    public function personen()
    {
        return $this->belongsToMany(Persoon::class, 'allergie_per_persoon', 'allergie_id', 'persoon_id')
                    ->withPivot('id', 'is_actief', 'opmerking', 'datum_aangemaakt', 'datum_gewijzigd');
    }
}
