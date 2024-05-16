<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [

        'image',
        'alt_tag',
        'news_description',
        'instagram_link',
        'facebook_link',
        'twitter_link',
        'location',
       ' phone1',
        'email1',
       ' address',
       


       
    ];
}
