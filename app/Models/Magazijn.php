<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazijn extends Model
{
    use HasFactory;

    protected $table = 'magazijn';

    protected $fillable = [
        'ontvangstdatum',
        'uitleveringsdatum',
        'verpakkingseenheid',
        'aantal',
    ];

    public function productenPerMagazijn()
    {
        return $this->hasMany(ProductPerMagazijn::class);
    }
}
