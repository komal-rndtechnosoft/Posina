<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WCS extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon',
        'title',
        'alt_tag',
       
    ];
}
