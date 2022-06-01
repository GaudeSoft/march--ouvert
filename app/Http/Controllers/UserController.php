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
        return view('frontend.commandes.index', compact('commandes'));
    }
    public function voir($id)
    {
        $commandes = Paiement::where('id',$id)->where('user_id',Auth::id())->first();
        return view('frontend.commandes.voir', compact('commandes'));
    }
}
