<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use App\Models\Produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvisController extends Controller
{
    public function add($produit_id)
    {
        $produit = Produits::where('id',$produit_id)->where('status','0')->first();
    
        if ($produit) {
            $id_produit = $produit->id;
            $verifier_commande = Paiement::where('paiement.user_id',Auth::id())
                ->join('paiement_item','paiement_id','paiement_item.paiement_id')
                ->where('paiement_item.produit_id',$id_produit)->get();
            return view('frontend.avis.index',compact('produit','verifier_commande'));
        }
        else {
            return redirect()->back()->with('status','Lien invalide');
        }
    }
}
