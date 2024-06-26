<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

    public function getLeveranciers($zoeknaam)
    {
        $leveranciers = Leverancier::has('contacts')
            ->with('contacts')
            ->where('leverancier_type', 'like', '%' . $zoeknaam . '%')
            ->orderBy('naam')
            ->get();

        return $leveranciers;
    }

    public function getLeverancierTypes()
    {
        $leverancierTypes = Leverancier::select('leverancier_type')
            ->distinct()
            ->orderBy('leverancier_type')
            ->get();

        return $leverancierTypes;
    }
}
