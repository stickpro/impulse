<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOptions extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'handle',
        'position'
    ];

    protected $casts = [
        'name' => 'array',
    ];
}
