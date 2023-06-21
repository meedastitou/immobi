<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class terrain extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'prix_vende',
        'owner',
        'status',
        'categorie',
        'capt',
        'surface_terre'
    ];
}
