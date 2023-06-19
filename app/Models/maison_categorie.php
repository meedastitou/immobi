<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maison_categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_maison',
        'id_categorie'
      
    ];
}
