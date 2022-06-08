<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Produits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Avis;

class FrontendController extends Controller
{
    public function detail_produit($prod_id)
    {
        if(Produits::where('id','prod_id')->exists())
        {
            $produits = Produits::where('id',$prod_id)->first();
            $avis = Avis::where('prod_id',$produits->id)->get();
            return view('frontend.produit.voir', compact('produits','avis'));
        }
        else
        {
            return redirect('/')->with('status','Lien invalide');
        }
    }
}
