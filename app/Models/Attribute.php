<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'attribute_type',
        'attribute_group_id',
        'position',
        'name',
        'handle',
        'section',
        'type',
        'required',
        'default_value',
        'configuration',
        'system',
    ];

    protected $casts = [
        'name'          => 'array',
        'configuration' => 'array',
    ];
}
