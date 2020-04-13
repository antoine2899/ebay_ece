<!DOCTYPE html>
<html>

<head>

    <title>EbayEce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="acceuil-styles.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  <script type="text/javascript">
      $(document).ready(function () {
      $('.header').height(550);
    });
    
  </script>
  <script src="js/accueil.js"></script>

</head>

<body>
  
    <div class="head-line"></div>
    <?php include('nav.php');?>


    
  <header class="header container-fluid">
      
    </header>
  <section class="sections about">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title">Categories</h2>
        <div class="line"><span></span></div>
      </div>
    </div>
  </section>

  <div class="container features">
      <div class="row">
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
           <div class="categ">
            <a href="#">
              <img src="Image/tresor.jpg" alt="Ferraille ou Trésor" class="img-responsive" >
              <h3 class="categ-title">Ferraille ou Trésor</h3>
            </a>
          </div>
        </div>
        
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <div class="categ">
          <a href="#">
            <img src="Image/musee.jpg" alt="Bon pour Musée" class="img-responsive" >
            <h3 class="categ-title">Bon pour Musée</h3>
           </a>
         </div>
      </div>
       
      
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <div class="categ">
         <a href="#">
           <img src="Image/VIP.jpg" alt="Objet VIP" class="img-responsive" >
           <h3 class="categ-title">Objet VIP</h3>
         </a>
        </div>
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
      <div class="swiper-slide "><img src="Image/VIP.jpg" alt="Objet VIP" class="img-responsive" ></div>
      <div class="swiper-slide "><img src="Image/musee.jpg" alt="Objet VIP" class="img-responsive" ></div>
      <div class="swiper-slide "><img src="Image/VIP.jpg" alt="Objet VIP" class="img-responsive" ></div>
      <div class="swiper-slide">
        <div class="product">

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
        <div class="container features">
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

    
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 30,
      slidesPerGroup: 4,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

</body>

</html>