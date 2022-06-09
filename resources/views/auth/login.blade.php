@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-success text-center " style="text-transform: uppercase;font-weight:bold">connexion</h1>

<div class="row">
<div class="col-md-4">
            <img src="assets/images/logo.png"  width="100%" Height ="380px"  alt="Marché ouvert">
        </div>
                <div class="col-md-6 mt-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
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
                        <div class="row mb-3">
                            <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Mot de passe') }}</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Se souvenir de moi') }}
                                        </label>
                                    </div>
                                </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Se connecter') }}
                                </button>
<br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link " href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    
</div>
@endsection
