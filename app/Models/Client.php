<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'Client';
    protected $fillable = ['nom_cli', 'Adresss_cli', 'lieu_travail'];
}
