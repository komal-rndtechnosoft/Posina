<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'description',
        'alt_tag',
        'counter1',
         'countertitle1',
         'counter2',
         'countertitle2',
         'counter3',
         'countertitle3',
         'counter4',
         'countertitle4',
         'description1',
        

       
    ];
}
