<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gezin extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam', 'code', 'eetwens_per_gezin', 'aantal_volwassenen', 'aantal_kinderen', 'aantal_babys', 'totaal_aantal_personen'
    ];

    public function persoons()
    {
        return $this->hasMany(Persoon::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'contact_per_gezins', 'gezin_id', 'contact_id');
    }
}
