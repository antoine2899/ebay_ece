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
        <script>
            window.addEventListener('scroll' , ()=> {

// add/remove class to navbar when scrolling to hide/show
                const nav = document.querySelector('.navbar');                
                var scroll = window.scrollY;
                if (scroll >= window.innerHeight*0.5) {
                    nav.classList.add('navfix');
                } else {
                    nav.classList.remove('navfix');
}

});
        </script>
        
    </head>

    <body>
        <!-- Line (block) a the top -->
        <div class="head-line"></div>
        
        <!-- Add Navbar -->
        <?php include('nav.php');?>
        
        <!-- Header -->
        <header class="header container-fluid">
  
        </header>
        
        <!-- Swiper Ferrailles -->
        <section class="swip-product">
            <div class="swiper-container features">
                <section class="sections about">
                      <div class="container">
                          <div class="section-header text-center">
                              <h2 class="section-title">Ferrailles et Trésor</h2>
                              <div class="line"><span></span></div>
                          </div>
                      </div>
                </section>
                <div class="swiper-wrapper">
                    <?php
                        $imgSrc = "Image/tresor.jpg";
                        $imgAlt = "Objet ancien";
                        $imgTitle = "ZBEUB ZBEUB";
                        $imgDescription ="Some quick example text to build on the card title and make up the bulk of the cards content.";
                        $imgPrice ="GRATUIT";
                        $refPage ="";
                        for ($i = 1; $i <= 10; $i++) {
                            echo '<div class="swiper-slide">
                            <div class="card" >
                                <img src="'. $imgSrc .'" class="card-img-top img-responsive" alt="'. $imgAlt .'">
                                <div class="card-body product-body">
                                    <h3 class="card-title">'. $imgTitle .'</h3>
                                    <p class="text-left card-subtitle text-muted text-truncate" style="margin-left:4%;margin-right:4%;height-max:10px;>"'. $imgDescription .'"</p>
                                    <h3 class="card-title card-price">'. $imgPrice .'</h3>
                                    <div class="buy" style="height:10%;">
                                        <a id="object1" href="#" class="btn ecebay" style="float:right; margin-bottom:4%; margin-right:4%;">Voir</a>
                                        <a id="object1" href="#" class="btn ecebay-outline" style="float:right; margin-bottom:4%; margin-right:4%;">Ajouter au pannier</a>
                                        
                                    </div>
                                </div>
                             </div>
                        </div>';
                        }
                    ?>
                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <!-- Swiper Bon pour le musé -->
        <section class="swip-product2">
            <div class="swiper-container features">
                <section class="sections about">
                      <div class="container">
                          <div class="section-header text-center">
                              <h2 class="section-title">Bon pour le musé</h2>
                              <div class="line"><span></span></div>
                          </div>
                      </div>
                </section>
                <div class="swiper-wrapper">
                    <?php
                        $imgSrc = "Image/musee.jpg";
                        $imgAlt = "Bon pour le musé";
                        $imgTitle = "C'est BOOOOO";
                        $imgDescription ="Some quick example text to build on the card title and make up the bulk of the cards content.";
                        $imgPrice ="100€";
                        $refPage ="";
                        for ($i = 1; $i <= 10; $i++) {
                            echo '<div class="swiper-slide">
                            <div class="card" >
                                <img src="'. $imgSrc .'" class="card-img-top img-responsive" alt="'. $imgAlt .'">
                                <div class="card-body product-body">
                                    <h3 class="card-title">'. $imgTitle .'</h3>
                                    <p class="text-left card-subtitle text-muted text-truncate" style="margin-left:4%;margin-right:4%;height-max:10px;>"'. $imgDescription .'"</p>
                                    <h3 class="card-title card-price">'. $imgPrice .'</h3>
                                    <div class="buy" style="height:10%;">
                                        <a id="object1" href="#" class="btn ecebay" style="float:right; margin-bottom:4%; margin-right:4%;">Voir</a>
                                        <a id="object1" href="#" class="btn ecebay-outline" style="float:right; margin-bottom:4%; margin-right:4%;">Ajouter au pannier</a>
                                        
                                    </div>
                                </div>
                             </div>
                        </div>';
                        }
                    ?>
                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <!-- Swiper Accessoire VIP -->
        <section class="swip-product">
            <div class="swiper-container features">
                <section class="sections about">
                      <div class="container">
                          <div class="section-header text-center">
                              <h2 class="section-title">Accessoire VIP</h2>
                              <div class="line"><span></span></div>
                          </div>
                      </div>
                </section>
                <div class="swiper-wrapper">
                    <?php
                        $imgSrc = "Image/VIP.jpg";
                        $imgAlt = "Accessoir VIP";
                        $imgTitle = "ROLEYYYYY";
                        $imgDescription ="Some quick example text to build on the card title and make up the bulk of the cards content.";
                        $imgPrice ="200000€";
                        $refPage ="";
                        for ($i = 1; $i <= 10; $i++) {
                            echo '<div class="swiper-slide">
                            <div class="card" >
                                <img src="'. $imgSrc .'" class="card-img-top img-responsive" alt="'. $imgAlt .'">
                                <div class="card-body product-body">
                                    <h3 class="card-title">'. $imgTitle .'</h3>
                                    <p class="text-left card-subtitle text-muted text-truncate" style="margin-left:4%;margin-right:4%;height-max:10px;>"'. $imgDescription .'"</p>
                                    <h3 class="card-title card-price">'. $imgPrice .'</h3>
                                    <div class="buy" style="height:10%;">
                                        <a id="object1" href="#" class="btn ecebay" style="float:right; margin-bottom:4%; margin-right:4%;">Voir</a>
                                        <a id="object1" href="#" class="btn ecebay-outline" style="float:right; margin-bottom:4%; margin-right:4%;">Ajouter au pannier</a>
                                        
                                    </div>
                                </div>
                             </div>
                        </div>';
                        }
                    ?>
                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

       
 
        <?php include('footer.php');?>
        
        <div id="scrollUp">
            <a href="#top"><img src="Image/top.png" height="50px" weight="50px"/></a>
        </div>
        
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

    </body>

</html>