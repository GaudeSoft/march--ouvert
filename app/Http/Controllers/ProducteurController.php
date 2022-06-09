<?php

namespace App\Http\Controllers;

use App\Models\Producteur;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ProducteurController extends Controller
{
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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'adresse' => ['required'],
            'codePostal' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'activite' => ['required'],
            'produit' => ['required'],
            'sexe' => ['required', 'string', 'max:255'],
        ]);
    }
     /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Producteur
     */
    protected function create(array $data)
    {
        return Producteur::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            //'password' => Hash::make($data['password']),
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'telephone' => $data['telephone'],
            'sexe' => $data['sexe'],
            'activite' => $data['activite'],
            'produit' => $data['produit'],
            'codePostal' => $data['codePostal'],
            'adresse' => $data['adresse'],
        ]);
    }
   
}
