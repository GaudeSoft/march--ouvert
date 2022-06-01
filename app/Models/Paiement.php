<?php

namespace App\Models;

use App\Models\PaiementItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    use HasFactory;

    protected $table = 'paiement';
    protected $fillable = [
        'user_id',
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

    public function commandeitem()
    {
        return $this->hasMany(PaiementItem::class);
    }
}
