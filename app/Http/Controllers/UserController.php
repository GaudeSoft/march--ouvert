<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $commandes = Paiement::where('user_id',Auth::id())->get();
        return view('frontend.commandes.index', compact('commandes'));
    }
    public function view($id)
    {
        $commandes = Paiement::where('id',$id)->where('user_id', Auth::id())->first();
        return view('frontend.commandes.view', compact('commandes'));
    }
   
}
