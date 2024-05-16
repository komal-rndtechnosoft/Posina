<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $fillable = [

        'image',
        'image1',
        'alt_tag1',
        'alt_tag',
        'phone',
        'address',
        'time',



       
    ];
}
