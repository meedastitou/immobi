<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maison extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'nb_chambre',
        'prix_vende',
        'prix_louer_moin',
        'prix_louer_jour',
        'nb_douche',
        'owner',
        'status',
        'capt',
        'surface_maison',
        'surface_terre'
    ];
}


