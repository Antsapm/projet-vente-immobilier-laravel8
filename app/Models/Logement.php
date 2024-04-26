<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    protected $table = 'Logement';
    protected $fillable = ['num_agence', 'num_cite', 'type_vente', 'prix_logement', 'brille_logement','situation'];
}
