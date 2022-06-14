<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributeur extends Model
{
    use HasFactory;
    protected $table = 'distributeur';
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'codePostal',
        'telephone',
        'activite',
        'produit',
        'sexe',
        'email',
        'password',
    ];
}
