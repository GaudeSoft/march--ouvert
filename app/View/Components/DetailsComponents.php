<?php

namespace App\View\Components;

use App\Models\Produits;
use Illuminate\View\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class DetailsComponents extends Component
{
    public $id;
    public function mount($id)
    {
       $this->id = $id;
    }
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function store($produit_id,$produit_nom,$produit_prix)
    {
        Cart::add($produit_id,$produit_nom,1,$produit_prix)->associate('App\Models\Produits');
        session()->flash('success_message','Produit ajouté avec succès');
        return redirect()->route('produit.panier');
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $produit = Produits::where('id',$this->id)->first();
        return view('components.details-components',['produit'=>$produit])->layout("layouts.welcome");
    }
}
