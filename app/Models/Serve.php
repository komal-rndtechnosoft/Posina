<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serve extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon',
        'title',
        'description',
        'alt_tag',
        'alt_tag1',
        'image',
       
    ];
}
