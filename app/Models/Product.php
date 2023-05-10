<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'product_type_id',
        'status',
        'attribute_data',
        'brand',
    ];

    protected $casts = [
        'attribute_data' => 'array',
    ];
}
