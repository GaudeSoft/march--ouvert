<!-- Navigation -->
<nav class="navbar navbar-expand-lg  static-top" style="background-color: #139630;">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="assets/images/logo.png" width="5%" alt="Ananas"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: white;">Boutique</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link active" aria-current="page" href="#" style="color: white;" >Mon profil</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link active" aria-current="page" href="{{ route('logout') }}" style="color: white;" >Déconnecter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>