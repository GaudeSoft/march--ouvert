<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $commandes = Paiement::where('id',Auth::id())->get();
        return view('commande', compact('commandes'));
    }
}
