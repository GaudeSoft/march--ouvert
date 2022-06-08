<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avis extends Model
{
    use HasFactory;

    protected $table = 'avis';
    protected $fillable = [
        'user_id',
        'prod_id',
        'user_avis',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
