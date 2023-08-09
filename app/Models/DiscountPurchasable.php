<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountPurchasable extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchasable_type',
        'purchasable_id',
        'type',
    ];
}
