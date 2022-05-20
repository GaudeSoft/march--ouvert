@extends('layouts.admin')

@section('content')
    <div class="card">
    <div class="card-header">
            <h4>Ajouter un produit</h4>
        </div>
        <div class="card-body">
           <form action="{{ url('insertProduit') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="row">
                   <div class="col-md-6">
                       <label for="">Nom du produit</label>
                       <input type="text" class="form-control" name="nom">
                   </div>
                   <div class="col-md-6">
                   <label for="">Catégorie du produit</label>
                        <select class="form-select" name="nomCategorie">
                            @foreach ($categorie as $item)
                                <option value="{{ $item->nom }}">{{ $item->nom }}</option>
                            @endforeach
                        </select>
                   </div>
                   
                   <div class="col-md-12" style="margin-top:1%">
                       <label for="">Description du produit</label>
                       <textarea name="description" id=""  rows="3"  class="form-control"></textarea>
                   </div>
                   <div class="col-md-6">
                       <label for="">Prix du produit</label>
                       <input type="number" class="form-control" name="prix">
                   </div>
                   <div class="col-md-6">
                       <label for="">Poids du produit</label>
                       <input type="decimal"  onchange="setTwoNumberDecimal" min="0" max="10" step="0.25" value="0.00" class="form-control" name="poids">
                   </div>
                   <div class="col-md-6">
                       <label for="">Quantité disponible</label>
                       <input type="number" class="form-control" name="qte">
                   </div>
                   <div class="col-md-12" style="margin-top:1%">
                        <input type="file" class="form-control" name="image">
                   </div>
                   <div class="col-md-12" style="margin-top:1%">
                       <button type="submit" class="btn btn-success">Ajouter</button>
                   </div>
               </div>
           </form>
        </div>
    </div>
@endsection