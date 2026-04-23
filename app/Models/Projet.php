<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [
        'titre',
        'description',
        'image',
        'technologie1',
        'technologie2',
        'technologie3',
    ];
}
