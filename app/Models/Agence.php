<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $table = 'Agence';
    protected $fillable = ['libelle_agence', 'provinces'];
}
