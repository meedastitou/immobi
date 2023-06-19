<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class louer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_maison',
        'id_consommateur',
        'date_louer',
        'date_fin'
    ];
}
