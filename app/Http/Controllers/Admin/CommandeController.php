<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paiement;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Paiement::where('status','0')->get();
        return view('admin.commande.index', compact('commandes'));
    }
    public function view($id)
    {
        return view('admin.commande.view', compact('commandes'));
    }
    public function updateCommande(Request $request, $id)
    {
        $commandes = Paiement::find($id);
        $commandes->status = $request->input('commande_status');
        $commandes->update();
        return redirect('commande')->with('status','Commande modifier avec succès');
    }
}
