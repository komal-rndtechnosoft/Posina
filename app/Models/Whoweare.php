<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whoweare extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'subtitle',
        'image1',
        'title',
        'description',
        'alt_tag',
        'video',
        'alt_tag1',
        'alt_tag2',
        'counter1',
         'countertitle1',
         'counter2',
         'countertitle2',
         'counter3',
         'countertitle3',
         'counter4',
         'countertitle4',
        

       
    ];
}
