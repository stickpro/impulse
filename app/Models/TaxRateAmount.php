<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRateAmount extends Model
{
    use HasFactory;

    protected $fillable = [
        'tax_class_id',
        'tax_rate_id',
        'percentage',
    ];
}
