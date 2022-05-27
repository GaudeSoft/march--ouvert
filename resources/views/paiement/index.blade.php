<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Paiement</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href=" {{ asset('frontend/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href=" {{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/chosen.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }} ">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/color-01.css') }} ">
        <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <!-- Styles -->
        <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    </head>
<body class="antialiased">    
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/images/logo.png" width="10%" alt="Ananas"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                            </li>
                        @endif
                        @else
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="/boutique" style="color: #139630;">Boutique</a>
                                </li>
                                <li class="nav-item"  >
                                    <a class="nav-link " aria-current="page" href="/panier" style="color: #139630;">Panier <span class="badge badge-pill badge-dark">{{ Cart::count() }}</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #139630;">
                                        {{ Auth::user()->prenom}}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item" href="/panier">
                                            <i class="material-icons opacity-10" style="color: #139630;">shop</i>
                                               Mon panier
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/account">
                                            <i class="material-icons opacity-10" style="color: #139630;">favorite</i>
                                               Mes favoris
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="material-icons opacity-10" style="color: #139630;">logout</i>    
                                            {{ __('Se déconnecter') }}  
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                 
                                    </ul>
                                </li>
                            </ul>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
	<main id="main" class="main-site">
        <div class="container">
            <div class="wrap-breadcrumb"></div>
            <div class=" main-content-area">
                <div class="wrap-address-billing">
                    <h3 class="box-title">Addresse de livraison</h3>
                    <form action="#" method="get" name="frm-billing">
                        <p class="row-in-form">
                            <label for="nom">Nom<span>*</span></label>
                            <input id="nom" type="text" name="nom" value="" placeholder="Votre nom">
                        </p>
                        <p class="row-in-form">
                            <label for="prenom">Prenom<span>*</span></label>
                            <input id="prenom" type="text" name="prenom" value="" placeholder="Votre prenom">
                        </p>
                        <p class="row-in-form">
                            <label for="email">Email :</label>
                            <input id="email" type="email" name="email" value="" placeholder="Entrez votre email">
                        </p>
                        <p class="row-in-form">
                            <label for="phone">Numero de téléphone <span>*</span></label>
                            <input id="phone" type="number" name="phone" value="" placeholder="Entrez votre numéro de téléphone">
                        </p>
                        <p class="row-in-form">
                            <label for="adresse">Addresse:</label>
                            <input id="adresse" type="text" name="adresse" value="" placeholder="Entrez votre adresse">
                        </p>
                        <p class="row-in-form">
                            <label for="vile">Vile<span>*</span></label>
                            <input id="vile" type="text" name="vile" value="" placeholder="Abomey-Calavi">
                        </p>
                    
                        <p class="row-in-form">
                            <label for="quatier">Quatier<span>*</span></label>
                            <input id="quatier" type="text" name="quatier" value="" placeholder="Kpota">
                        </p>
                        
                    </form>
                </div>
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Methode de paiement </h4>
                        
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="momo" type="radio">
                                <span>MTN Momo</span>
                            
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-visa" value="UBA" type="radio">
                                <span>UBA</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                                <span>Paypal</span>
                            </label>
                        </div>
                        <p class="summary-info grand-total"><span>Grand Total:</span> <span class="grand-total-price">{{Cart::total()}}F CFA</span></p>
                        <a href="#" class="btn btn-medium">Payer maintenant</a>
                    </div>
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Livraison</h4>
                        <p class="summary-info grand-total"><span>Frais de livraison:</span> <span class="grand-total-price">{{Cart::total()}}F CFA</span></p>
                    </div>
                </div>
            </div><!--end main content area-->
        </div><!--end container-->
    </main>
</body>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('frontend/js/jquery-1.12.4.minb8ff.js?ver=1.12.4.js') }}" ></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('frontend/js/chosen.jquery.min.js') }}" ></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}" ></script>
<script src="{{ asset('frontend/js/jquery.sticky.js') }}" ></script>
<script src="{{ asset('frontend/js/functions.js') }}" ></script>
</html>