<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    use HasFactory;

    protected $fillable = [
        'gezin_id', 'voornaam', 'tussenvoegsel', 'achternaam', 'geboortedatum', 'type_persoon', 'is_vertegenwoordiger'
    ];

    public function gezin()
    {
        return $this->belongsTo(Gezin::class);
    }
}
