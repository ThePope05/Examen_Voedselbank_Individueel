<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllergiePerPersoon extends Model
{
    protected $table = 'allergie_per_persoon';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'persoon_id', 'allergie_id', 'is_actief', 'opmerking', 'datum_aangemaakt', 'datum_gewijzigd'
    ];

    public function persoon()
    {
        return $this->belongsTo(Persoon::class, 'persoon_id', 'id');
    }

    public function allergie()
    {
        return $this->belongsTo(Allergie::class, 'allergie_id', 'id');
    }
}
