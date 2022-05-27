<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;

    public function getPrice()
    {
        $prix = $this-> prix / 100;

        return number_format($prix, 2, ',' ,''). 'F CFA';
    }
    protected $table = 'produits';
    protected $fillable = [
        'nom',
        'nomCategorie',
        'description',
        'prix',
        'poids',
        'qte',
        'image',
    ];

}
