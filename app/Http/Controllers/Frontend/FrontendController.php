<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Produits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function detail_produit($prod_id)
    {
        if(Produits::where('id','prod_id')->exists())
        {
            $produits = Produits::where('id',$prod_id)->first();
            return view('frontend.produit.voir', compact('produits'));
        }
        else
        {
            return redirect('/')->with('status','Lien invalide');
        }
    }
}
