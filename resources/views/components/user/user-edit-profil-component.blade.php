<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Modifier profil</title>

   
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

</head>
<body>
    <div class="card mb-3" style="max-width: 100%; margin-top:5%">
        <div class="row g-0">
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
            <form wire:submit.prevent="upadeProfile">
                <div class="col-md-4">
                    @if($newimage)
                        <img src="{{ $newimage->temporaryUrl()}}" width="100%"/>
                    @elseif($image)
                        <img src="{{ asset('assets/images/profile') }}/{{$user->profile->image}}" width="100%"/>
                    @else
                        <img src="{{ asset('assets/images/profile/default.jpg') }}" width="100%"/>
                    @endif
                    <input type="file" wire:model="newimage" class="form-control">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Mes informations</h5><hr>

                        <p class="card-text"> <b>Prénom: </b>
                            <input type="text" wire:model="prenom"  value="{{ $user->prenom }}"class="form-control">
                        </p>
                        <p class="card-text"> <b>Nom: </b>
                            <input type="text" wire:model="nom"  value="{{ $user->nom }}"class="form-control">
                        </p>
                        
                        <p class="card-text"> <b>Email: </b>
                            <input type="email" wire:model="email"  value="{{ $user->email }}"class="form-control">
                        </p>
                        <p class="card-text"> <b>Téléphone: </b>
                            <input type="number" wire:model="telephone"  value="{{ $user->telephone }}"class="form-control">
                        </p>
                        <p class="card-text"> <b>Sexe: </b>
                            <input type="text" wire:model="sexe"  value="{{ $user->sexe }}"class="form-control">
                        </p>
                        <p class="card-text"> <b>Type de compte:: </b>
                            <input type="text" wire:model="typeCompte"  value="{{ $user->typeCompte }}"class="form-control">
                        </p>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
 <!-- Scripts -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/material-dashboard.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>