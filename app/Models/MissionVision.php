<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionVision extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_title',
        'about_description',
        'image',
        'about_title1',
        'image1',
        'about_description1',
        'alt_tag',
        'alt_tag1',


    ];
}
