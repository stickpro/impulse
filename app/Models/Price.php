<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_group_id',
        'currency_id',
        'priceable',
        'price',
        'compare_price',
        'tier',
    ];
}
