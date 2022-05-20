@extends('layouts.admin')

@section('content')
    <div class="card">
    <div class="card-header">
            <h4>Ajouter une catégorie</h4>
        </div>
        <div class="card-body">
           <form action="{{ url('insertCategorie') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="row">
                   <div class="col-md-6">
                       <label for="">Nom</label>
                       <input type="text" class="form-control" name="nom">
                   </div>
                   <div class="col-md-12" style="margin-top:1%">
                       <label for="">Description</label>
                       <textarea name="description" id=""  rows="3"  class="form-control"></textarea>
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