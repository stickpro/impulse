<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxZoneCountry extends Model
{
    use HasFactory;

    protected $fillable = [
        'tax_zone_id',
        'country_id',
    ];
}
