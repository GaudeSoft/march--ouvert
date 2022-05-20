@extends('layouts.admin')

@section('content')
    <div class="card" >
        <div class="card-header">
            <h4 class="text-bold">Produits disponibles</h4>
            <hr>
        </div>
        <div class="card-body">
           <table class="table table-hover table-bordered  container-fluid" style="text-align: center;  min-height: 10em;
    display: table-cell;
    vertical-align: middle ;">
               <thead>
                   <tr style="text-transform: uppercase;font-weight:bold;">
                        <td>Nom</td>
                        <td>Catégorie</td>
                        <td>Description</td>
                        <td>Prix</td>
                        <td>Qantité</td>
                        <td>Poids</td>
                        <td>Image</td>
                        <td>Action</td>
                   </tr> 
               </thead>
               <tbody>
                   @foreach($produit as $item)
                        <tr>
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->nomCategorie }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->prix }} FCFA</td>
                            <td>{{ $item->qte }}</td>
                            <td>{{ $item->poids }} Kg</td>
                           
                            <td>
                                <img src="{{ asset('assets/uploads/produit/'.$item->image) }}" class="cate-image" alt="Image" >   
                            </td>
                            <td>
                                <a href="{{ url('modifierProduit/'.$item->id) }}"  class="btn btn-success">Modifier</a>
                                <a href="{{ url('suprrimerProduit/'.$item->id) }}"  class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
               </tbody>
           </table>
        </div>
    </div>
@endsection