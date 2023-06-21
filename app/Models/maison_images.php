<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maison_images extends Model
{
    use HasFactory;
    protected $fillable = [
        'lien',
        'id_maison'
      
    ];

    
}

