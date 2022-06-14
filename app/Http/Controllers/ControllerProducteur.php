<?php

namespace App\Http\Controllers;

use App\Models\Producteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ControllerProducteur extends Controller
{
    public function inscrire ()
    {
        return view ('producteur.register');
    }
    public function getInscrire()
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
        Producteur::create([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'adresse' => request('adresse'),
            'codePostal' => request('codePostal'),
            'telephone' => request('telephone'),
            'password' => Hash::make( request('password')),
            'activite' => request('activite'),
            'produit' => request('produit'),
            'sexe' => request('sexe'),
        ]);
       
       return redirect('register')->with('message','INSCRIPTION EFFECTUE AVEC SUCCES');
    }
}
