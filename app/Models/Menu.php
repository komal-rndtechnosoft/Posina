<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [

        'banner_image',
        'page_name',
        'slug',
        'alt_tag',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'meta_canonical',



       
    ];
}
