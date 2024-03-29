<?php

namespace App\Models;

use App\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'country_id',
        'title',
        'first_name',
        'last_name',
        'company_name',
        'line_one',
        'line_two',
        'line_three',
        'city',
        'state',
        'postcode',
        'delivery_instructions',
        'contact_email',
        'contact_phone',
        'meta',
        'shipping_default',
        'billing_default',
    ];

    protected $casts = [
        'meta' => 'array',
    ];
}
