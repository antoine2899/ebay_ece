<!DOCTYPE html>
<html>

    <head>

    <head>
        <title>EbayEce</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
        <!-- Front Awesome altenative to Glyphicons-->
        <script src="https://kit.fontawesome.com/906c6df7d2.js" crossorigin="anonymous"></script>
        <!-- Our CSS -->
        <link rel="stylesheet" type="text/css" href="acceuil-styles.css">
        
        <!-- Our JavaScript -->
        <script src="accueil.js"></script>
    </head>

    <body>
        <!-- Line (block) a the top -->
        <div class="head-line"></div>
        
        <!-- Add Navbar -->
        <?php include('nav.php');?>
        
        <!-- Header -->
        <header class="header container-fluid">
  
        </header>

        <!-- Creation Categories -->
        <!-- Title -->
        <section class="sections about">
          <div class="container">
            <div class="section-header text-center">
              <h2 class="section-title">Categories</h2>
              <div class="line"><span></span></div>
            </div>
          </div>
        </section>

        <!-- Body -->

        <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-3 category">
            <img src="Image/tresor.jpg" alt="Ferraille ou Trésor" class="img-fluid">
            </div>
            <div class="col-3 category">
              <img src="Image/musee.jpg" alt="Bon pour Musée" class="img-fluid" >
            </div>
            <div class="col-3 category">
            <img src="Image/VIP.jpg" alt="Objet VIP" class="img-fluid" >
            </div>
          </div>
        </div>
        
        <!-- Swiper -->
        <section class="products">
            <div class="swiper-container features">
                <section class="sections about">
                      <div class="container">
                          <div class="section-header text-center">
                              <h2 class="section-title">Coup de coeur</h2>
                              <div class="line"><span></span></div>
                          </div>
                      </div>
                </section>
                <div class="swiper-wrapper">
                    <div class="swiper-slide "><img src="Image/VIP.jpg" alt="Objet VIP" class="img-fluid" ></div>
                    <div class="swiper-slide "><img src="Image/musee.jpg" alt="Objet VIP" class="img-fluid" ></div>
                    <div class="swiper-slide "><img src="Image/VIP.jpg" alt="Objet VIP" class="img-fluid" ></div>
                    <div class="swiper-slide">
                        <div class="card" >
                            <img src="Image/musee.jpg" class="card-img-top img-responsive" alt="musée">
                            <div class="card-body">
                                <h3 class="card-title">Imprimante manuel</h3>
                                <p class="card-text text-left" style="margin-left:4%;margin-right:4%;height-max:10%;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h3 class="card-title">2000€</h3>
                                <div class="buy col-12" style="height:10%;">
                                    <a id="object1" href="#" class="btn btn-danger" style="float:right; margin-bottom:4%; margin-right:4%;">Ajouter au pannier</a>
                                    <select id="quantity1" class="form-control" style="width:18%;float:right;margin-right:2%">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="3">4</option>
                                        <option value="3">5</option>
                                        <option value="3">6</option>
                                        <option value="3">7</option>
                                        <option value="3">8</option>
                                        <option value="3">9</option>
                                    </select>
                                    <div class="card-text" style="float:right;margin-right:2%;margin-top:2%;">Quantité :</div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                    <div class="swiper-slide">Slide 10</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                    <div class="swiper-slide">Slide 10</div>
                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        
        
        <div class="history">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="feature-title">Histoire</h3>
                        <img src="images-TP/column1.jpg" class="img-fluid">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat
                            ante
                            luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php');?>
        
        <div id="scrollUp">
            <a href="#top"><img src="Image/top.png" height="50px" weight="50px"/></a>
        </div>
        
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

    </body>

</html>