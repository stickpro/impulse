<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxZone extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'zone_type',
        'price_display',
        'active',
        'default',
    ];
}
