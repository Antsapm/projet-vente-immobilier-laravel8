<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cite extends Model
{
    protected $table = 'Cite';
    protected $fillable = ['libelle_cite', 'num_terrain','num_cli', 'situation'];
}
