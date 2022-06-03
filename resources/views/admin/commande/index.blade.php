@extends('layouts.admin')

@section('title')
    Les commandes
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                   <div class="card-header">
                       <h4>Mes commandes</h4>
                   </div>
                   <div class="card-body">
                   <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Numéro de commande</th>
                            <th>Date de commande</th>
                            <th>Montant total</th>
                            <th>Etat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($commandes as $commande)
                        <tr>
                            <td>{{$commande->tracking_no}}</td>
                            <td>{{ date('d-m-Y',  strtotime($commande->created_at))}} à {{ date('h:m:s',  strtotime($commande->created_at))}}</td>
                            <td>{{Cart::total()}}F CFA</td>
                            <td>{{$commande->status == '0' ? 'Non livré' : 'Livré'}}</td>
                            <td>
                                <a href="{{ url('admin/voir-commande/'.$commande->id) }}" class="btn btn-success">
                                    Details
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                   </div>
               </div>
            </div>
        </div>
    </div>
    
@endsection