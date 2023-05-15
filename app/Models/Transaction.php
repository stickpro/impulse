<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'success',
        'refund',
        'driver',
        'amount',
        'reference',
        'status',
        'notes',
        'card_type',
        'last_four',
        'meta',
    ];

    protected $casts = [
        'meta' => 'array',
    ];
}
