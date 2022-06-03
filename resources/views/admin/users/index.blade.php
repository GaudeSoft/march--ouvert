@extends('layouts.admin')

@section('content')

    <div class="card" >
        <div class="card-header">
            <h4 class="text-bold">Utilisateurs de marché ouvert</h4>
            <hr>
        </div>
        <div class="card-body" >
           <table class="table table-hover table-bordered  container-fluid" style="text-align: center;  min-height: 10em;display: table-cell;vertical-align: middle ;">
               <thead>
                   <tr style="text-transform: uppercase;font-weight:bold;">
                        <td>ID</td>
                        <td>Nom complet</td>
                 
                        <td>Email</td>
                        <td>Action</td>
                   </tr> 
               </thead>
               <tbody>
                   @foreach($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nom.' '.$item->prenom }}</td>
                         
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ url('view-users/'.$item->id) }}"  class="btn btn-success">Voir</a>
                            </td>
                        </tr>
                    @endforeach
               </tbody>
           </table>
        </div>
    </div>
@endsection