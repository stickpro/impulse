<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'purchasable_id',
        'purchasable_type',
        'quantity',
        'meta'
    ];
}
