<nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
  <a class="mr-4"> Filter : </a>
  
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-3">
                <input type="number" class="form-control" placeholder="Prix min: " name="prix_min">
            </li>
            <li class="nav-item ml-3">
                <input type="number" class="form-control" placeholder="Prix max: " name="prix_max">
            </li>
            <li class="nav-item dropdown ml-3">
                <a class="nav-link dropdown-toggle" href="#" id="achatype" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Type d'achat
                </a>
                <div class="dropdown-menu" aria-labelledby="achatype">
                <a class="dropdown-item" href="#">Achat immédiat</a>
                <a class="dropdown-item" href="#">Enchère</a>
                <a class="dropdown-item" href="#">Meilleure offre</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="prix" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Trier
                </a>
                <div class="dropdown-menu" aria-labelledby="prix">
                <a class="dropdown-item" href="#">Croissant</a>
                <a class="dropdown-item" href="#">Décroissant</a>
                </div>
            </li>
        </ul>
    </div>
</nav>