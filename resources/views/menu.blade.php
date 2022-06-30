<nav class="navbar navbar-expand-sm  fixed-top" style="background-color: white; ">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                        <img src="assets/images/logo.png" width="15%"  alt="Marché ouvert"> 
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav  ms-auto" >
                        <!-- Authentication Links -->
                        @guest
                            
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-success" style="color: white; font-size: 15px; font-weight:bold" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-light ml-2" style="color: #139630; font-size: 15px; font-weight:bold" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="/panier" style="color: #139630; font-size: 15px; ">Panier <span class="badge rounded-pill text-bg-success">{{ Cart::count() }}</span></a>
                                </li>
                                <li class="nav-item dropdown ms-auto">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #139630; font-size: 15px; ">
                                        {{ Auth::user()->prenom}}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item" href="/tableau_de_bord">
                                            <i class="material-icons opacity-10" style="color: black;">person</i>
                                               Tableau de bord
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="/mes_commandes">
                                            <i class="material-icons opacity-10" style="color: black;">shop</i>
                                               Mes commandes
                                            </a>
                                        </li>
                                       <!-- <li>
                                            <a class="dropdown-item" href="/account">
                                            <i class="material-icons opacity-10" style="color: black;">favorite</i>
                                               Mes favoris
                                            </a>
                                        </li>-->
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="material-icons opacity-10" style="color: black;">logout</i>    
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
            </div></nav>
<nav class="navbar navbar-expand-sm  fixed-top mt-6" style="background-color: #139630; ">
                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav   "  style="color: white;">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="/" style="color: white; font-size: 15px; font-weight:700">Acceuil</a>
                            </li>
                            <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="/boutique" style="color: white; font-size: 15px; font-weight:700">Boutique</a>
                            </li>
                            <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="/panier" style="color: white; font-size: 15px; font-weight:700">Panier</a>
                                </li>
                                <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="#" style="color: white; font-size: 15px; font-weight:700">Paiement</a>
                                </li>
                                <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="/panier" style="color: white; font-size: 15px; font-weight:700">Panier</a>
                                </li>
                                <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="#" style="color: white; font-size: 15px; font-weight:700">Paiement</a>
                                </li>
                            
                        @else
                            <ul class="navbar-nav ms-auto  mb-2 mb-lg-0" style="text-transform: uppercase;">
                                <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="/" style="color: white; font-size: 15px; font-weight:700;">Acceuil</a>
                                </li>
                                <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="/boutique" style="color: white; font-size: 15px; font-weight:700">Boutique</a>
                                </li>
                                <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="/panier" style="color: white; font-size: 15px; font-weight:700">Panier</a>
                                </li>
                                <li class="nav-item"  >
                                  <a class="nav-link " aria-current="page" href="#" style="color: white; font-size: 15px; font-weight:700">Paiement</a>
                                </li>
                                
                               
                            </ul>
                        @endguest
                    </ul>
                    
                </div>
            </div>
        </nav>