@extends('layouts.admin')

@section('content')
    <div class="card">
    <div class="card-header">
            <h4>Modifier une catégorie</h4>
        </div>
        <div class="card-body">
           <form action="{{ url('updateCategorie/'.$categorie->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               <div class="row">
                   <div class="col-md-6">
                       <label for="">Nom</label>
                       <input type="text" value="{{ $categorie->nom }}" class="form-control" name="nom">
                   </div>
                   <div class="col-md-12" style="margin-top:1%">
                       <label for="">Description</label>
                       <textarea name="description" id=""  rows="3"  class="form-control">{{ $categorie->description }}</textarea>
                   </div>
                   @if($categorie->image)
                        <img src="{{ asset('assets/uploads/categorie/'.$categorie->image) }}"  alt="Image" class="w-25">
                   @endif
                   <div class="col-md-12" style="margin-top:1%">
                        <input type="file" class="form-control " name="image">
                   </div>
                   <div class="col-md-12" style="margin-top:1%">
                       <button type="submit" class="btn btn-success">Modifier</button>
                   </div>
               </div>
           </form>
        </div>
    </div>
@endsection