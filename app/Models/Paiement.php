<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $table = 'paiement';
    protected $fillable = [
        'lnom',
        'lprenom',
        'lemail',
        'lphone',
        'ville',
        'qte',
        'quatier',
        'status',
        'message',
        'tracking_no',
    ];
}
