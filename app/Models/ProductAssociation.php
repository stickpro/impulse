<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAssociation extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_parent_id',
        'product_target_id',
        'type',
    ];
}
