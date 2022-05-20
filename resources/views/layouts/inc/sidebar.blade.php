<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "style=" background:#139630" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/">
        <!--<img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">-->
        <span class="ms-3 font-weight-bold text-white">Marché ouvert</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        
        <li class="nav-item {{ Request::is('#') ? 'active':''}}">
          <a class="nav-link text-white " href="{{ route('user.profile') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Mon profil</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('ajoutCategorie') ? 'active':''}}">
          <a class="nav-link text-white" href="{{ url('ajoutCategorie') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Ajouté une catégorie</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('categories') ? 'active':''}}">
          <a class="nav-link text-white" href="{{ url('categories') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">category</i>
            </div>
            <span class="nav-link-text ms-1">Catégories</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('ajoutProduit') ? 'active':''}}">
          <a class="nav-link text-white" href="{{ url('ajoutProduit') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Ajouté un produit</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('produits') ? 'active':''}}">
          <a class="nav-link text-white" href="{{ url('produits') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">category</i>
            </div>
            <span class="nav-link-text ms-1">Produits</span>
          </a>
        </li>
        
       
      </ul>
    </div>
  </aside>
