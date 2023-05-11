<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collection extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'collection_group_id',
        'type',
        'attribute_data',
        'sort',
    ];

    protected $casts = [
        'attribute_data' => 'array',
    ];
}
