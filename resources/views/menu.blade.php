<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="assets/images/logo.png" width="15%" alt="Marché ouvert"> 
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
                                  <a class="nav-link " aria-current="page" href="/panier" style="color: #139630;">Panier <span class="badge rounded-pill text-bg-success">{{ Cart::count() }}</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #139630;">
                                        {{ Auth::user()->prenom}}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item" href="/mes_commandes">
                                            <i class="material-icons opacity-10" style="color: #139630;">shop</i>
                                               Mes commandes
                                            </a>
                                        </li>
                                       <!-- <li>
                                            <a class="dropdown-item" href="/account">
                                            <i class="material-icons opacity-10" style="color: #139630;">favorite</i>
                                               Mes favoris
                                            </a>
                                        </li>-->
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