<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'category_id',
        'price',
        'stock',
        'description',
        'image',
        'quantity_in_stock',
        'brand_name',
        'generic_name',
        'unit_current',
        'stock_tax',
        'promotion',
        'gross_weight',
        'net_weight',
        'is_active',
        'is_delete',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
