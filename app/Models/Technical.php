<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technical extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
            'name',
            'product_id',
            'subtitle',
           
    ];
}
