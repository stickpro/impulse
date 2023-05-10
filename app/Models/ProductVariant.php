<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariant extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'product_id',
        'tax_class_id',
        'attribute_data',
        'tax_ref',
        'unit_quantity',
        'sku',
        'gtin',
        'mpn',
        'ean',
        'shippable',
        'stock',
        'backorder',
        'purchasable',
    ];
}
