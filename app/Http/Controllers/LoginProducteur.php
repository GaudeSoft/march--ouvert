<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginProducteur extends Controller
{
    public function getValidate() { 
        return view('producteur.login'); 
    } 
  
    public function postValidate(Request $request) { 
        $request->validate([ 
            'email' => 'required', 
            'password' => 'required|min:8|max:255', 
        ]); 
    } 
}
