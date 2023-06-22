<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class terrain_images extends Model
{
    use HasFactory;
    protected $fillable = [
        'lien',
        'id_terrain'
      
    ];
}
