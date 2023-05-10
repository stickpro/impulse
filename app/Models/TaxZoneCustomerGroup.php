<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxZoneCustomerGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'tax_zone_id',
        'customer_group_id',
    ];
}
