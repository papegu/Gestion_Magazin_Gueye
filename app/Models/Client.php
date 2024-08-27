<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    // Indiquer les attributs que tu veux permettre pour l'affectation de masse
    protected $fillable = [
        'name',
        'email',
        'phone',
        // Ajoute d'autres attributs si nécessaire
    ];
}
