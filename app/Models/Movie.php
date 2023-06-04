<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'director',
        'year',
        'genres',
        'rating',
    ];
}
