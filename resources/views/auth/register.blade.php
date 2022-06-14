@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-success text-center " style="text-transform: uppercase;font-weight:bold">Inscription</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="assets/images/logo.png"  width="100%" Height ="380px"  alt="Marché ouvert">
        </div>
        <div class="col-md-8 mt-3">
        <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="row">
                    <div class="col-md-6">
                        
                            <label for="nom" class="col-md-12 col-form-label text-md-left">{{ __('Nom') }}</label>

                            <div class="col-md-12">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       
                    </div>
                    <div class="col-md-6">
                        
                            <label for="prenom" class="col-md-12 col-form-label text-md-left">{{ __('Prenom') }}</label>

                            <div class="col-md-12">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="telephone" class="col-md-12 col-form-label text-md-left">{{ __('Téléphone') }}</label>

                            <div class="col-md-12">
                                <input id="telephone" type="tel" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('Email') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="typeCompte" class="col-md-12 col-form-label text-md-left">{{ __('Type de compte') }}</label>

                            <div class="col-md-12">
                                <select  id="typeCompte" class="form-control @error('typeCompte') is-invalid  @enderror" name="typeCompte" value="{{ old('typeCompte') }}" required autocomplete="typeCompte" >
                                    <option value="">Choisir une option</option>
                                    <option value="Producteur">Producteur</option>
                                    <option value="Distributeur">Distributeur</option>
                                    <option value="Client">Client</option>
                                </select>

                                @error('typeCompte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="form-check">
                                <label for="sexe" class="col-md-12 col-form-label text-md-left">{{ __('Sexe') }}</label>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input " type="radio" name="sexe" id="masculin" value="masculin">
                                    <label class="form-check-label" for="masculin">Masculin</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="sexe" id="feminin" value="feminin">
                                    <label class="form-check-label" for="feminin">Féminin</label>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Mot de passe') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-12 col-form-label text-md-left">{{ __('Confirmez mot de passe') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        </div></div>
                        <div class="row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-success">
                                    {{ __('S\'inscrire') }}
                                </button>
                            </div>
                        </div>
                    
                    </form>
        </div>
</div>
@endsection
