<?php

namespace App\Http\Livewire;

use App\Models\Produits;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        $produit = Produits::where('id',$this->id)->first();
        return view('components.details-components',['produit'=>$produit]);
    }
}
