<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'merged_id',
        'currency_id',
        'order_id',
        'coupon_code',
        'completed_at',
        'meta'
    ];

    protected $casts = [
        'completed_at' => 'datetime',
    ];
}
