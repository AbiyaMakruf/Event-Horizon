<?php
session_start();


if( !isset($_SESSION["login"])) {
    header("Location: ../../");
    exit;
}

if($_COOKIE['cooperate'] === "yes"){
  require("redirect.html");
  exit;
}

?>




<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Jasa Pembuatan Website Sederhana, Dengan Harga Yang Terjangkau Dan Dalam Jangka Waktu Yang Cepat.">
    <meta name="author" content="Muhammad Abiya Makruf">
    <meta name="author" content="Muhammad Rafly Arjasubrata">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


    <!-- Judul Website -->
    <title>Event Horizon</title>


    <!-- Bootstrap CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- CSS Files-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/not-cooperate-version1.css">
    <link rel="stylesheet" href="../../assets/css/animated.css">
    <link rel="stylesheet" href="../../assets/css/owl.css">


    <!-- Fav Icon -->
    <!-- Fav Icon -->
    <meta property="og:image" content="assets/images/favicon.png" href="../../assets/images/favicon.png">
    <link rel="shortcut icon" type="image/png" href="../../assets/images/favicon.png">
    <link rel="icon" type="image/png" href="../../assets/images/favicon.png">
    <link rel="favicon" type="image/png" href="../../assets/images/favicon.png">
    <link itemprop="thumbnailUrl" href="../../assets/images/favicon.png"> <span itemprop="thumbnail" itemscope itemtype="http://schema.orgImageObject"> <link itemprop="url" href="assets/images/favicon.png"> </span>

  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="../" class="logo">
              <img src="../../assets/images/Header Website Blue.png" alt="The-EventHorizon">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="../../assets/php/logout.php" class="active">Logout</a></li>
              <li class="scroll-to-section"></li>
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

<div data-wow-duration="1s" data-wow-delay="0.5s">
  <img src="../../assets/images/bg-kuli.svg" class="bg-kuli-dekstop" alt=""  id="bg-kuli">
  <img src="../../assets/images/bg-kuli-mobile.svg" class ="bg-kuli-mobile" alt="" id="bg-kuli2">
</div>



  <!-- Scripts -->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/js/owl-carousel.js"></script>
  <script src="../../assets/js/animation.js"></script>
  <script src="../../assets/js/imagesloaded.js"></script>
  <script src="../../assets/js/popup.js"></script>
  <script src="../../assets/js/custom.js"></script>
</body>
</html>