<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxZoneState extends Model
{
    use HasFactory;

    protected $fillable = [
        'tax_zone_id',
        'state_id',
    ];
}
