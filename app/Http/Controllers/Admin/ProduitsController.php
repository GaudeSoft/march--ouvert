<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produits;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class ProduitsController extends Controller
{
    public function index()
    {
        $produit = Produits::all();
        return view('admin.produits.index', compact('produit'));
    }

    public function ajout()
    {
        $categorie = Categorie::all();
        return view('admin.produits.ajout', compact('categorie'));
    }

    public function insert(Request $request)
    {
        $produit = new Produits();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/produit',$filename);
            $produit->image = $filename;
        }
        
        $produit->nom = $request->input('nom');
        $produit->nomCategorie = $request->input('nomCategorie');
        $produit->description = $request->input('description');
        $produit->prix = $request->input('prix');
        $produit->poids = $request->input('poids');
        $produit->qte = $request->input('qte');
        $produit->save();
        return redirect('/dashboard')->with('status','Produit ajouté avec succès');
    }
    public function modifier($id){
        $produit = Produits::find($id);
        return view('admin.produits.index', compact('produit'));
    }
    public function update(Request $request, $id)
    {
        $produit = Produits::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/produit/'.$produit->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/produit',$filename);
            $produit->image = $filename;
        }
        
        $produit->nom = $request->input('nom');
        $produit->nomCategorie = $request->input('nomCategorie');
        $produit->description = $request->input('description');
        $produit->prix = $request->input('prix');
        $produit->poids = $request->input('poids');
        $produit->qte = $request->input('qte');
        $produit->update();
        return redirect('/produits')->with('status','Produit modifié avec succès');
    }
    public function supprimer($id)
    {
        $produit = Produits::find($id);
        if($produit->image){
            $path = 'assets/uploads/produit/'.$produit->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $produit->delete();
        return redirect('produits')->with('status','Produit supprimé avec succès');

    }
}
