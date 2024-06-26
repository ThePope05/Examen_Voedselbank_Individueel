<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    use HasFactory;

    protected $table = 'leveranciers';

    protected $fillable = [
        'naam',
        'contact_persoon',
        'leverancier_nummer',
        'leverancier_type',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_per_leveranciers', 'leverancier_id', 'product_id')
            ->withPivot('datum_aangeleverd', 'datum_eerst_volgende_levering')
            ->withTimestamps();
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'contact_per_leveranciers', 'leverancier_id', 'contact_id')
            ->withTimestamps();
    }
}
