<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'prod_id',
        'prod_qte',
    ];

    public function products(){
        return $this->belongsTo(Produits::class,'prod_id','id');
    }
}
