@extends('layouts.admin')

@section('content')
    <div class="card" >
        <div class="card-header">
            <h4>Les avis</h4>
            <hr>
        </div>
        <div class="card-body">
           <table class="table table-hover table-bordered  container-fluid" style="text-align: center;  min-height: 10em;display: table-cell;vertical-align: middle ;">
               <thead>
                   <tr style="text-transform: uppercase;font-weight:bold;">
                       
                        <td>Avis</td>
                        <td>Utilisateur</td>
                        <td>Approuvé</td>
                    
                   </tr> 
               </thead>
               <tbody>
                   @foreach($comments as $comment)
                        <tr>
                           
                            <td>{{ $comment->nom }}</td>
                            <td>{{ $comment->description }}</td>
                            <td>{{ $comment->description }}</td>
                            <td>{{ $comment->description }}</td>
                        </tr>
                    @endforeach
               </tbody>
           </table>
        </div>
    </div>
@endsection