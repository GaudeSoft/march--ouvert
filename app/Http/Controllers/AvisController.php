<?php

namespace App\Http\Controllers;

use App\Models\Avis;
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
    public function create(Request $request)
    {
        $id_produit = $request->input('prod_id');
        $produit = Produits::where('id',$id_produit)->where('status','0')->first();
        if ($produit) {
            $user_avis = $request->input('user_avis');
            $new_avis = Avis::create([
                'user_id' => Auth::id(),
                'prod_id' => $id_produit,
                'user_avis' => $user_avis
            ]);
            $produ_id = $produit->id;
            if ($new_avis) {
                return redirect('/boutique')->with('status',"Merci pour votre avis");
            }
        }
        else {
            return redirect()->back()->with('status','Lien invalide');
        }
    }
    public function voir()
    {
        $avis = Avis::all();
        return $avis;
    }
}
