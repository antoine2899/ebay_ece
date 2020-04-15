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
        <link rel="stylesheet" type="text/css" href="achat.css">
        
        <!-- Our JavaScript -->
        <script src="achat.js"></script>
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
        <section class="sections about mt-3">
          <div class="container">
            <div class="section-header text-center">
              <h2 class="section-title">Ferrailles</h2>
              <div class="line"><span></span></div>
            </div>
          </div>
        </section>
        <?php include('nav-filter.php');?>
        <!-- Body -->

        <div class="container mt-5">
          <div class="row justify-content-center">
              <?php

                $itemPerPage = 20;
                $totalItems = 100;
                $pages = $totalItems / $itemPerPage;
                $imgSrc = "Image/VIP.jpg";
                $imgAlt = "Objet VIP";

                for ($i = 1; $i <= 20; $i++) {
                    echo '<div class="col-3 mt-5 category">
                    <img src="' . $imgSrc . '" alt="' . $imgAlt . '" class="img-fluid" >
                </div>';
                }
                
              
              ?>
            
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
                                <p class="text-left card-subtitle text-muted text-truncate" style="margin-left:4%;margin-right:4%;height-max:10px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h3 class="card-title card-price">2000€</h3>
                                <div class="buy" style="height:10%;">
                                    <a id="object1" href="#" class="btn btn-danger" style="float:right; margin-bottom:4%; margin-right:4%;">Voir</a>
                                    <a id="object1" href="#" class="btn btn-outline-danger" style="float:right; margin-bottom:4%; margin-right:4%;">Ajouter au pannier</a>
                                    
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

        <!-- Add Pagination page -->

        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="ecebay-outline page-link" href="javascript:void(0);">Previous</a></li>
            <?php
                for ($i = 1; $i <= $pages; $i++) {
                    echo '<li class="page-item"><a class="ecebay-outline page-link" style="margin-left: 2px;"href="javascript:void(0);">' . $i . '</a></li>';
                }
            ?>
            <li class="page-item"><a class="ecebay-outline page-link" href="javascript:void(0);" style="margin-left: 2px;">Next</a></li>
        </ul>
 
        <?php include('footer.php');?>
        
        <div id="scrollUp">
            <a href="#top"><img src="Image/top.png" height="50px" weight="50px"/></a>
        </div>
        
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

    </body>

</html>