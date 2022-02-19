<?php
session_start();
require'assets/php/functions.php';


// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ){
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query($conn,"SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if($key === hash('sha256',$row['username'])){
    $_SESSION['login'] = true;
  }
}


if( isset($_SESSION["login"])) {
    header("Location: user-menu");
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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- CSS Files-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/version_6.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">


    <!-- Fav Icon -->
    <meta property="og:image" content="assets/images/favicon.png" href="assets/images/favicon.png">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="favicon" type="image/png" href="assets/images/favicon.png">
    <link itemprop="thumbnailUrl" href="assets/images/favicon.png"> <span itemprop="thumbnail" itemscope itemtype="http://schema.orgImageObject"> <link itemprop="url" href="assets/images/favicon.png"> </span>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">

            <!-- ***** Logo Start ***** -->
            <a href="../" class="logo">
              <img src="assets/images/header/logo-eventhorizon-blue.png" alt="The-EventHorizon">
            </a>
            <!-- ***** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Live Demo</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#pricing">Pricing</a></li>
              <li class="scroll-to-section"><a href="#newsletter">Contact Us</a></li>
              <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div></li> 
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
  


  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login - See Your Project Progress</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">

            <div class="action_btns">
                <div ><a href="#" id="login_form" class="btn">Login</a></div>
            </div>

            <div class="centeredText">
                <span>Or Sign Up</span>
            </div>

            <div class="action_btns">
                <div ><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form action="assets/php/login.php" method="post">
                <label>Username</label>
                <input type="text" name="username" id="username"/>
                <br />

                <label>Password</label>
                <input type="password" name="password" id="password"/>
                <br />

                <div class="checkbox">
                    <input id="remember" name = "remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#modal" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                </div>
                <div><br></div>
                <div class="action_btns">
                  <div class="one_half">
                    <button class="btn btn_red" type="submit" name="login"> Login!</button>
                  </div>
              </div>
            </form>

        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form action="assets/php/registrasi.php" method="post">
                <label>Username</label>
                <input type="text" name="username" id="username"/>
                <br />

                <label>Email Address</label>
                <input type="email" name="email" id="email"/>
                <br />

                <label>Password</label>
                <input type="password" name="password" id="password"/>
                <br />

                <div class="action_btns">
                    <div class="one_half"><a href="#modal" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <br>
                    <div class="one_half">
                      <button class="btn btn_red" type="submit" name="register" id="registrasi"> Register!</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Jasa Pembuatan Website Sederhana</h2>
                    <p>Event Horizon Adalah Sebuah Vendor Yang Bergerak Pada Jasa Pembuatan Website Sederhana Untuk Kebutuhan Event, Organisasi, dll. Dengan Harga Yang Terjangkau Dan Dalam Jangka Waktu Yang Cepat.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a target = "blank" href="https://www.instagram.com/weare.eventhorizon/">Our Instagram <i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/main-page/png/floating-charcter.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4><em>Layanan &amp; Fitur </em> Luar Biasa Untuk Anda</h4>
            <img src="assets/images/main-page/png/heading-line.png" alt="">
            <p>Contoh website yang telah kami buat. Dapat dilihat dengan mengklik "Live Demo".</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Website F2WL 2021</h4>
            <p>Website ini dibuat pada bulan Februari 2021. Untuk melihat tampilan secara lebih detail, silahkan klik live demo.</p>
            <div class="text-button">
              <a href="assets/livedemo/f2wl2021" class="livedemo">Live Demo<i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Website F2WL 2022</h4>
            <p>Website ini dibuat pada bulan Februari 2022. Untuk melihat tampilan secara lebih detail, silahkan klik live demo.</p>
            <div class="text-button">
              <a href="assets/livedemo/f2wl2022"class="livedemo" >Live Demo<i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>Open Tournament F2WL'22</h4>
            <p>Website ini dibuat pada bulan November 2021. Untuk melihat tampilan secara lebih detail, silahkan klik live demo.</p>
            <div class="text-button">
              <a href="assets/livedemo/opentournament"class="livedemo" >Live Demo<i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>Website Garage Coco</h4>
            <p>Website ini dibuat pada bulan Januari 2022. &nbsp; Untuk melihat tampilan secara lebih detail, silahkan klik live demo.</p>
            <div class="text-button">
              <a href="assets/livedemo/garagecoco"class="livedemo" >Live Demo<i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>Tentang <em>apa yang kita lakukan</em> &amp; Siapa kita</h4>
            <img src="assets/images/main-page/png/heading-line.png" alt="">
            <p>Meskipun kami adalah vendor yang baru bergerak pada tahun 2021, tetapi kami akan memberikan pelayanan yang berkualitas.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a>Design</a></h4>
                <p>Anda tidak memiliki konten design? Jangan khawatir, kami dapat bantu membuatnya dengan harga yang cukup terjangkau.</p>
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a>24/7 Support &amp; Help</a></h4>
                <p>Kami siap membantu anda jika ada masalah pada website, pagi hari, siang hari, malam hari, hari libur, kapanpun.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a>Maintance Problems</a></h4>
                <p>Kami akan memberikan maintance problem jika ada masalah pada website.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a>Revision</a></h4>
                <p>Kami akan memberikan revisi secara gratis jika ada kesalahan dari pihak kami.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/main-page/svg/about-us-bg-main.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clients" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4> <em>Event Horizon</em> Team & <em>Event Horizon</em> Multimedia Partner</h4>
            <img src="assets/images/main-page/png/heading-line.png" alt="">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-7 align-self-center">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Muhammad Rafly</h4>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Visual & Art Director</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <span class="rating">+62 878-2552-0999</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Abiya Makruf</h4>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Technical Director</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <span class="rating">+62 821-2718-0662</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Studio Of Wizards</h4>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Multimedia Partner</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                              <span class="rating">+62 815-7278-5053</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/main-page/png/profile-rafly.png" alt="">
                                <p>“Saya disini bekerja sebagai visual & art director, jika kalian membutuhkan bantuan dalam hal design, konsep website, dan pembuatan artwork.”</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/main-page/png/profile-abiya.png" alt="">
                                <p>“Saya disini bekerja sebagai technical director, jika kalian ingin menanyakan lebih lanjut mengenai harga, fitur yang dibutuhkan, ataupun masalah hosting, saya yang akang membantu anda.”</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/main-page/png/profile-sow.png" alt="">
                                <p>“Studio Of Wizards adalah partner kami yang bergerak dalam jasa multimedia seperti dokumentasi acara berupa foto dan video, ataupun editing video untuk shortmovie.”</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Kami memiliki <em>harga</em> yang sangat terjangkau </h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Kalian dapat menghubungi kami melalui whatsapp untuk membicarakan masalah harga secara lebih lanjut. System pembayaran yang kami gunakan adalah 50% dari harga total untuk DP, dan 50% lagi ketika website sudah selesai kami kerjakan.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item pricing-planetary">
            <span class="price">150k</span>
            <h4>Planetary</h4>
            <div class="icon">
              <img src="assets/images/main-page/svg/pricing-icon-planetary.svg" alt="">
            </div>
            <ul>
              <li>1 Halaman</li>
              <li>Pengeditan Gambar Sederhana</li>
              <li>Pemeliharaan Website</li>
              <li class="non-function">Gratis Revisi</li>
              <li class="non-function">Mobile Responsive</li>
              <li class="non-function">Live Preview</li>
            </ul>
            <div class="border-button">
              <a href="pricing/">Spesifikasi Detail</a>
              <br><br><br><br><br>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-pro pricing-stellar">
            <span class="price">250k</span>
            <h4>Stellar</h4>
            <div class="icon">
              <img src="assets/images/main-page/svg/pricing-icon-stellar.svg" alt="">
            </div>
            <ul>
              <li>3 Halaman</li>
              <li>Pengeditan Gambar Sederhana</li>
              <li>Pemeliharaan Website</li>
              <li>Gratis Revisi Minor 2x</li>
              <li>Mobile Responsive</li>
              <li class="non-function">Live Preview</li>
            </ul>
            <div class="border-button">
              <a href="pricing/">Spesifikasi Detail</a>
              <br><br><br><br><br><br>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item pricing-galactic">
            <span class="price">500k</span>
            <h4>Galactic</h4>
            <div class="icon">
              <img src="assets/images/main-page/svg/pricing-icon-galactic.svg" alt="">
            </div>
            <ul>
              <li>7 Halaman</li>
              <li>Pengeditan Gambar Sederhana</li>
              <li>Pemeliharaan Website</li>
              <li>Gratis Revisi Minor 5x</li>
              <li>Mobile Responsive</li>
              <li>Live Preview</li>
            </ul>
            <div class="border-button">
              <a href="pricing/">Spesifikasi Detail</a>
              <br><br><br><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Berlangganan untuk mendapatkan informasi terbaru &amp; promo harga dari kami.</h4>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="assets/php/subscribe.php" method="POST">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <input type="email" name="email" class="email" id="email" placeholder="Email Address..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <button type="submit" name="subscribe" id="subscribe">Subscribe Sekarang <i class="fa fa-angle-right"></i></button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Kontak Kami</h4>
            <p>Jl. Lodaya Bandung, Indonesia</p>
            <p><a href="tel:+62 821-2718-0662 ">+62 821-2718-0662</a></p>
            <p><a href="mailto: theeventhorizon.service@gmail.com">theeventhorizon.service@gmail.com</a></p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Tentang Kami </h4>
            <ul>
              <li><a href="#top">Home</a></li>
              <li><a href="#services">Live Demo</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#pricing">Pricing</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Tentang Vendor Kami</h4>
            <div class="logo">
              <img src="assets/images/footer/logo-eventhorizon-white.png" alt="">
            </div>
            <p>Event Horizon adalah vendor yang bergerak pada jasa pembuatan website sederhana, dengan harga yang terjangkau, dan juga waktu pengerjaan yang cepat.</p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Tentang Multimedia Partner Kami</h4>
            <div class="logosow">
              <img src="assets/images/footer/logo-sow-white.png" alt="">
            </div>
            <p>Studio Of Wizards adalah vendor yang bergerak pada jasa multimedia seperti dokumentasi acara, ataupun editing video untuk aftermovie.</p>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 Event Horizon. All Rights Reserved. </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/livechat.js"></script>
  </script>
</body>
</html>