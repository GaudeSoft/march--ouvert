<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }
    public function index()
    {
        $produit = Produits::where('id',$this->id)->first();
        return view('components.details-components',compact('produit'));
    }
}
