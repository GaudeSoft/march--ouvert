<?php

namespace App\View\Components;

use App\Models\Produits;
use Livewire\WithPagination;
use Illuminate\View\Component;

class BoutiqueComponent extends Component
{
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
        $produits= Produits::paginate(12);
        return view('components.boutique-component',['produits'=>$produits]);
    }
}
