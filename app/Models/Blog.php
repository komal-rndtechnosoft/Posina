<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'posted_by',
        'image',
        'alt_tag',
        'banner_image',
        'banner_alt_tag',
        'short_description',
        'long_description',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'meta_canonical',
    ];
}
