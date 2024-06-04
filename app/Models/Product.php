<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
            'name',
            'slug',
            'size',
            'pack',
            'desc1',
            'image',
            'alt',
            'multiimage',
            'alt1',
            'meta_title',
            'meta_description',
            'meta_keyword',
            'meta_canonical',
    ];
}
