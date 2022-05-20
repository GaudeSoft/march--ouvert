<div class="container"><div class=" card mt-5" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-2">
            <img src="assets/images/banaane2.png" class="w-80 mt-6" alt="...">
        </div>
        <div class="col-md-10">
            <div class="card-body">
                <h5 class="card-title" style="color: #139630;font-weight:bold;">Banane</h5>
                <h6 style="color: #139630;font-style:oblique 10deg;">Catégorie: Fruits</h6>
                <p class="card-text" class="w-10 ">Ici il aura une description de chaque produit</p>
                <p class="card-text"><small class="text-muted">200F</small></p>
                <a href="#" class="btn btn-success">Details</a>
          
            </div>
        </div>
    </div>
</div>

<div class=" card mt-5" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-2">
            <img src="assets/images/maïs.png" class="w-80 mt-6" alt="...">
        </div>
        <div class="col-md-10">
            <div class="card-body">
                <h5 class="card-title" style="color: #139630;font-weight:bold;">Maïs</h5>
                <h6 style="color: #139630;font-style:oblique 10deg;">Catégorie: Céréales</h6>
                <p class="card-text">Ici il aura une description de chaque produit</p>
                <p class="card-text"><small class="text-muted">250F / Kg</small></p>

                <a href="{{ route('produit.detail',['id'=>$produit->id]) }}" class="btn btn-success">Details</a>

            </div>
        </div>
    </div>
</div>
<div class=" card mt-5" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-2">
            <img src="assets/images/av2.png" class="w-80 mt-6" alt="...">
        </div>
        <div class="col-md-10">
            <div class="card-body">
                <h5 class="card-title" style="color: #139630;font-weight:bold;">Avocat</h5>
                <h6 style="color: #139630;font-style:oblique 10deg;">Catégorie: Fruits</h6>
                <p class="card-text">Ici il aura une description de chaque produit</p>
            <p class="card-text"><small class="text-muted">150F</small></p>
                <a href="#" class="btn btn-success">Details</a>

          
            </div>
        </div>
    </div>
</div>

</div>