<?php

namespace App\View\Components;

use App\Models\Produits;
use Illuminate\View\Component;

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

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $produit = Produits::where('id',$this->id)->first();
        return view('components.details-components',['produit'=>$produit]);
    }
}
