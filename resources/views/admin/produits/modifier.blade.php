@extends('layouts.admin')

@section('content')
    <div class="card">
    <div class="card-header">
            <h4>Ajouter un produit</h4>
        </div>
        <div class="card-body">
           <form action="{{ url('modifierProduit/'.$produit->id') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
               <div class="row">
                   <div class="col-md-6">
                       <label for="">Nom du produit</label>
                       <input type="text" class="form-control" value="{{ $produit->nom }}" name="nom">
                   </div>
                   <div class="col-md-6">
                   <label for="">Catégorie du produit</label>
                        <select class="form-select" >
                            <option value="">{{ $produit->categorie->nom }}>{{ $item->nom }}</option>
                        </select>
                   </div>
                   
                   <div class="col-md-12" style="margin-top:1%">
                       <label for="">Description du produit</label>
                       <textarea name="description" id=""  rows="3"  class="form-control">{{ $produit->description }}</textarea>
                   </div>
                   <div class="col-md-6">
                       <label for="">Prix du produit</label>
                       <input type="number" value="{{ $produit->prix }}" class="form-control" name="prix">
                   </div>
                   <div class="col-md-6">
                       <label for="">Poids du produit</label>
                       <input type="decimal" value="{{ $produit->poids }}"  onchange="setTwoNumberDecimal" min="0" max="10" step="0.25" value="0.00" class="form-control" name="poids">
                   </div>
                   <div class="col-md-6">
                       <label for="">Quantité disponible</label>
                       <input type="number" value="{{ $produit->qte }}" class="form-control" name="qte">
                   </div>
                   @if($categorie->image)
                        <img src="{{ asset('assets/uploads/produit/'.$produit->image) }}"  alt="Image" class="w-25">
                   @endif
                   <div class="col-md-12" style="margin-top:1%">
                        <input type="file" class="form-control" name="image">
                   </div>
                   <div class="col-md-12" style="margin-top:1%">
                       <button type="submit" class="btn btn-success">Modifier</button>
                   </div>
               </div>
           </form>
        </div>
    </div>
@endsection