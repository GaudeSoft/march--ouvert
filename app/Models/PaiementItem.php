<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaiementItem extends Model
{
    use HasFactory;

    protected $table = 'paiement_item';
    protected $fillable = [
        'paiement_id',
        'produit_id',
        'prix',
        'qte',
    ];
    public function products(): BelongsTo
    {
        return $this->belongsTo(Produits::class, 'produit_id','id');
    }
}
