@extends('layouts.admin')

@section('content')
    <div class="card" >
        <div class="card-header">
            <h4>Catégories disponibles</h4>
            <hr>
        </div>
        <div class="card-body">
           <table class="table table-hover table-bordered  container-fluid" style="text-align: center;  min-height: 10em;display: table-cell;vertical-align: middle ;">
               <thead>
                   <tr style="text-transform: uppercase;font-weight:bold;">
                       
                        <td>Nom</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>Action</td>
                   </tr> 
               </thead>
               <tbody>
                   @foreach($categorie as $item)
                        <tr>
                           
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/categorie/'.$item->image) }}" class="cate-image" alt="Image" >   
                            </td>
                            <td>
                                <a  href="{{ url('modifierCategorie/'.$item->id) }}" onclick="confirm('Voulez vous supprimer définitivement cette catégorie ?') || event.stopImmediatePropagation()" class="btn btn-success">Modifier</a>
                                <a href="{{ url('suprrimerCategorie/'.$item->id) }}"  class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
               </tbody>
           </table>
        </div>
    </div>
@endsection