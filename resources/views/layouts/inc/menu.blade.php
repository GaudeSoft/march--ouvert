<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-ligth bg-ligth static-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="assets/images/logo.png" width="50%" alt="marché ouvert"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Connexion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Inscription</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
