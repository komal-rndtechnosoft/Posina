<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'alt_tag',
        'slug',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'meta_canonical',
       
    ];
}
