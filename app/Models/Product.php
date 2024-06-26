<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'categorie_id',
        'naam',
        'soort_allergie',
        'barcode',
        'houdbaarheidsdatum',
        'omschrijving',
        'status',
    ];

    public function leveranciers()
    {
        return $this->belongsToMany(Leverancier::class, 'product_per_leveranciers', 'product_id', 'leverancier_id')
            ->withPivot('datum_aangeleverd', 'datum_eerst_volgende_levering')
            ->withTimestamps();
    }
}
