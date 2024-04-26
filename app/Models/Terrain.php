<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    protected $table = '_terrain';
    protected $fillable = ['localisation', 'superficie_terrain','num_cli', 'situation'];
}
