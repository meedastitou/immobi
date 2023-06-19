<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consommateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'cne',
        'nom',
        'prenom',
        'email',
        'tel',
        'nb_personne'
    ];

}
