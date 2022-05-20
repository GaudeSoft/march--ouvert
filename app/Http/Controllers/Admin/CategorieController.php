<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class CategorieController extends Controller
{
    public function index()
    {
        $categorie = Categorie::all();
        return view('admin.categorie.index', compact('categorie'));
    }

    public function ajout()
    {
        return view('admin.categorie.ajout');
    }

    public function insert(Request $request)
    {
        $categorie = new Categorie();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/categorie',$filename);
            $categorie->image = $filename;
        }
        
        $categorie->nom = $request->input('nom');
        $categorie->description = $request->input('description');
        $categorie->save();
        return redirect('/dashboard')->with('status','Catégorie ajouté avec succès');
    }
    public function modifier($id){
        $categorie = Categorie::find($id);
        return view('admin.categorie.modifier',compact('categorie'));
    }
    public function update(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/categorie/'.$categorie->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/categorie',$filename);
            $categorie->image = $filename;
        }
        $categorie->nom = $request->input('nom');
        $categorie->description = $request->input('description');
        $categorie->update();
        return redirect('/dashboard')->with('status','Catégorie modifiée avec succès');
    }
    public function supprimer($id)
    {
        $categorie = Categorie::find($id);
        if($categorie->image){
            $path = 'assets/uploads/categorie/'.$categorie->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $categorie->delete();
        return redirect('categories')->with('status','Catégorie supprimée avec succès');

    }
}
