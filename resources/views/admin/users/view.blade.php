@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-header">
                        <h4 class="text-bold">Information du client</h4>
                        <hr>
                        
                    </div>
                    <div class="card-body">
                        <div class="row">
                           
                            <div class="col-md-4 mt-3">
                                <label for="">Nom</label>
                                <div class="p-2 border">{{ $users->nom }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Prénom</label>
                                <div class="p-2 border">{{ $users->prenom }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Email</label>
                                <div class="p-2 border">{{ $users->email }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Téléphone</label>
                                <div class="p-2 border">{{ $users->telephone }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Sexe</label>
                                    <div class="p-2 border">{{ $users->sexe }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Date de création du compte</label>
                                    <div class="p-2 border">{{ date('d-m-Y',  strtotime($users->created_at))}} à {{ date('h:m:s',  strtotime($users->created_at))}}</div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection