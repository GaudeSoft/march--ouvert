<?php

namespace App\Http\Controllers;

use App\Models\Producteur;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ProducteurController extends Controller
{
    use RegistersUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    //Create Form
    public function createProducteurForm(Request $request)
    {
        return view ('producteur.register');
    }
    //Enregistrement des données
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function store()
    {
        
        request()->validate([
            
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'adresse' => ['required'],
            'codePostal' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:producteurs'],
            'telephone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'activite' => ['required'],
            'produit' => ['required'],
            'sexe' => ['required', 'string', 'max:255'],
        ]);
       $producteur = new Producteur();
       $producteur->nom = request('nom');
       $producteur->prenom = request('prenom');
       $producteur->adresse = request('adresse');
       $producteur->codePostal = request('codePostal');
       $producteur->telephone = request('telephone');
       $producteur->password =Hash::make( request('password'));
       $producteur->activite = request('activite');
       $producteur->produit = request('produit');
       $producteur->sexe = request('sexe');
       $producteur->save();
       return Redirect::to('register')->with('message','INSCRIPTION EFFECTUE AVEC SUCCES');
    }
    
}
