<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use App\Models\Carts;
use App\Models\PaiementItem;
use App\Models\Produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartitems = Carts::where('id',Auth::id())->get();
        return view('paiement.index', compact('cartitems'));
    }
    public function paiementCommande(Request $request)
    {
        $paiement = new Paiement();
        $paiement->user_id = Auth::id(); 
        $paiement->lnom = $request->input('lnom');
        $paiement->lprenom = $request->input('lprenom');
        $paiement->lemail = $request->input('lemail');
        $paiement->lphone = $request->input('lphone');
        $paiement->ladresse = $request->input('ladresse');
        $paiement->ville = $request->input('ville');
        $paiement->quatier = $request->input('quatier');
        $paiement->tracking_no = "commande".rand(1111,9999);
        $paiement->save();

       $cartitems = Carts::where('user_id',Auth::id())->get();
        foreach($cartitems as $item){
            PaiementItem::create([
                'paiement_id'=> $paiement->id,
                'produit_id' => $item->id,
                'qte' => $item->qte,
                'prix' => $item->products->prix,
            ]);

            $prod = Produits::where('id',$item->id)->first();
            $prod->qte  = $prod->qte - $item->qte;
            $prod->update();
        }
        Cart::destroy();
        return redirect('/boutique')->with('status',"Commande effectué avec succès");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
