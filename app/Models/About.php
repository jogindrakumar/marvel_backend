<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'post_one',
        'post_two',
        'desp',
        'email',
        'mobile',
        'cv',
        'img',
        
    ];
}
