<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use App\Models\PaiementItem;
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
        return view('paiement.index');
    }
    public function paiementCommande(Request $request)
    {
        $paiement = new Paiement();
        $paiement->lnom = $request->input('lnom');
        $paiement->lprenom = $request->input('lprenom');
        $paiement->lemail = $request->input('lemail');
        $paiement->lphone = $request->input('lphone');
        $paiement->ladresse = $request->input('ladresse');
        $paiement->ville = $request->input('ville');
        $paiement->quatier = $request->input('quatier');
        $paiement->tracking_no = "gautier".rand(1111,9999);
        $paiement->save();

       /* $cartitems = Cart::where('user_id',Auth::id())->get();
        foreach($cartitems as $item){
            PaiementItem::create([
                'paiement_id'=> $paiement->id,
                'produit_id' => $itemProduit->id,
                'qte' => $itemProduit->qte,
                'prix' => $itemProduit->prix,
            ])
        }*/
        return redirect('/')->with('status','Commande effectué avec succès');
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
