<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'channel_id',
        'status',
        'reference',
        'customer_reference',
        'sub_total',
        'discount_total',
        'shipping_total',
        'tax_breakdown',
        'tax_total',
        'total',
        'notes',
        'currency_code',
        'compare_currency_code',
        'exchange_rate',
        'placed_at',
        'meta',
    ];

    protected $casts = [
        'placed_at' => 'datetime',
    ];
}
