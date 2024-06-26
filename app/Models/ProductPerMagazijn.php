<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerMagazijn extends Model
{
    use HasFactory;

    protected $table = 'product_per_magazijn';

    protected $fillable = [
        'product_id',
        'magazijn_id',
        'locatie',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function magazijn()
    {
        return $this->belongsTo(Magazijn::class, 'magazijn_id');
    }
}
