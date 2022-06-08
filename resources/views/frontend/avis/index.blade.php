@extends('layouts.app')

@section('title', 'Laissez un avis')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    
                </div>

                <div class="card-body">
                    @if($verifier_commande->count() >= 0)
                        <h5>Laissez votre avis sur {{$produit->nom }}</h5>
                        <form action="{{ url('/add-avis')}}" method="post">
                            @csrf
                            <input type="hidden" name="prod_id" value="{{$produit->id }}">
                            <textarea class="form-control"name="user_avis" id=""  rows="5" placeholder="Votre avis"></textarea>
                            <button type="submit" class="btn btn-success mt-3">Publier</button>
                        </form>
        
                    @else
                        <div class="alert alert-danger">
                            <h5>Vous n'êtes pas autorisé pour commenter ce produit</h5>
                            <p>
                                Pour laisser un avis sur ce produit, vous devriez effectué une commande.
                            </p>
                            <a href="{{ url('/boutique') }}" class="btn btn-success">Allez à la boutique</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
