<?php

namespace App\Models;

use App\Http\Controllers\BrandController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product',
        'brand_id',
        'stock',
        'unit_price',
        'imagen'
    ];

    public function brand():BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
