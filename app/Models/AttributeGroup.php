<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'attributable_type',
        'name',
        'handle',
        'position',
    ];

    protected $casts = [
        'name' => AsCollection::class,
    ];
}
