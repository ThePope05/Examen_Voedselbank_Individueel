<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'categorie_id',
        'naam',
        'soort_allergie',
        'barcode',
        'houdbaarheidsdatum',
        'omschrijving',
        'status',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function productenPerMagazijn()
    {
        return $this->hasMany(ProductPerMagazijn::class);
    }
}
