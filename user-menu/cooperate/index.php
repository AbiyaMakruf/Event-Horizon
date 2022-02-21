<?php
session_start();

// Cek Udah Login Atau Belum
if( !isset($_SESSION["login"])) {
    header("Location: ../../");
    exit;
}

// Cek apakah client cooperate atau bukan, jika bukan, arahin ke not-cooperate folder
if($_COOKIE['cooperate'] !== "yes"){
  require("redirect.html");
  exit;
}


// Konek Database
require'../../assets/php/functions.php';

$ceklangganan = $_COOKIE['name'];

$result = mysqli_query($conn,"SELECT * FROM dataproject WHERE username = '$ceklangganan'");
$result2 = mysqli_query($conn,"SELECT * FROM dataproject WHERE username = '$ceklangganan'");
$row = mysqli_fetch_assoc($result);

$username = $row['username'];
$clientname = $row['clientname'];
$instansi = $row['instansi'];
$projectname = $row['projectname'];
$packageoption = $row['packageoption'];
$projectstatus = $row['projectstatus'];
$bankdownpayment = $row['bankdownpayment'];
$totaldowypament = $row['totaldownpayment'];
$bankpelunasan = $row['bankpelunasan'];
$totalpelunasan = $row['totalpelunasan'];
$totalharga = $row['totalharga'];
$projectstart = $row['projectstart'];
$projectdeadline = $row['projectdeadline'];
$revisionhistory = $row['revisionhistory'];
$pernahrevisi = $row['sudahpernahrevisi'];
$pernahtransaksi = $row['sudahpernahtransaksi'];
$descrevisi = $row['deskripsirevisi'];
$tanggalrevisi = $row['tanggalrevisi'];
$kebutuhan = $row['requirement'];
$desckebutuhan = $row['descrequirement'];
$statuskebutuhan = $row['statusrequirement'];
$gambarprofile =  $row['profilepicture']; 
$addon = $row['addon'];
$requirementaddon = $row['requirementaddon'];
$descrequirementaddon = $row['descrequirementaddon'];
$statusrequirementaddon = $row['statusrequirementaddon'];
$revisi = $row['revisi'];
$requirementrevisi = $row['requirementrevisi'];
$descrequirementrevisi = $row['descrequirementrevisi'];
$statusrequirementrevisi = $row['statusrequirementrevisi'];



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Event Horizon</title>
    <meta name="author" content="Muhammad Abiya Makruf">
    <meta name="author" content="Muhammad Rafly Arjasubrata">
    <meta name="description" content="Jasa Pembuatan Website Sederhana, Dengan Harga Yang Terjangkau Dan Dalam Jangka Waktu Yang Cepat.">

    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Fav Icon -->
    <meta property="og:image" content="../../assets/images/favicon.png" href="../../assets/images/favicon.png">
    <link rel="shortcut icon" type="image/png" href="../../assets/images/favicon.png">
    <link rel="icon" type="image/png" href="../../assets/images/favicon.png">
    <link rel="favicon" type="image/png" href="../../assets/images/favicon.png">
    <link itemprop="thumbnailUrl" href="../../assets/images/favicon.png"> <span itemprop="thumbnail" itemscope itemtype="http://schema.orgImageObject"> <link itemprop="url" href="assets/images/favicon.png"> </span>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">


        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="../cooperate"><img src="../../assets/images/Header Logo Cooperate White Medium.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../cooperate"><img src="../../assets/images/Header Logo Cooperate White Mini.svg" alt="logo" /></a>
        </div>


        <ul class="nav">


          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets_profile_picture/<?php echo $gambarprofile?>" alt=""> <!-- Nanti Foto Ini Diganti Sama Astronot Profile Picture -->
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo $username ?></h5>  <!-- Nanti Nama Ini Diambil Dari Data Base-->
                  <span><?php echo $instansi ?></span>  <!-- Nanti Client Ini Diambil Dari Data Base-->
                </div>
              </div>
            </div>
          </li>


          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="../cooperate">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Live Preview</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="" id="live-preview">Version 1.0</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li> -->
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#downloadfile" aria-expanded="false" aria-controls="download-file">
              <span class="menu-icon">
                <i class="mdi mdi-folder-download text-success"></i>
              </span>
              <span class="menu-title">Download File</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="downloadfile">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Syarat & Ketentuan </a></li>
                <li class="nav-item"> <a class="nav-link" href="">Cara Order</a></li>
                <li class="nav-item"> <a class="nav-link" href="" id="folder-asset-client">Website & Assets</a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="../../assets/php/logout.php">
              <span class="menu-icon">
                <i class="mdi mdi-logout text-danger"></i>
              </span>
              <span class="menu-title">Log out</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../cooperate"><img src="../../assets/images/Header Logo Cooperate White Mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>

            <!-- Search Bar -->
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <!-- <input type="text" class="form-control" placeholder="Search products"> -->
                </form>
              </li>
            </ul>
            


            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets_profile_picture/<?php echo $gambarprofile?>" alt=""> 
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $username ?></p> 
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Change Profile Picture</h6>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1"></p>
                        <form action="" method="post" enctype="multipart/form-data">

                          <!-- Versi Tutor Youtube -->
                          <!-- <input type="file" name="changeprofile"  id="changeprofile" style="display: none;"/>
                          <label for="changeprofile" style="color:white; height:60px; widht:250px; background-color:#f5af09; position: absolute; margin: auto; top:0; bottom:0; left:0; right:0; font-size:20px; display:flex; justify-content:center; align-items:center;">
                            Change Photo
                          </label> -->

                          <!-- Versi Original -->
                          <!-- <input type="file" name="changeprofile"  id="changeprofile"/> -->
                        
                          <!-- Versi Coba-Coba -->
                          
                          <label for="changeprofile" class="btn btn-primary btn-icon-text mdi mdi-folder-multiple-image" >
                            Choose Photo
                          </label>
                          <input type="file" name="changeprofile"  id="changeprofile" style="display:none;"/>

                          <br>
                          <br>
                          <button type="submit" class="btn btn-outline-danger btn-icon-text" name="uploadprofile" id="uploadprofile">
                            <i class="mdi mdi-sync btn-icon-prepend"></i>Change
                          </button>

                            <?php
                              if (isset($_POST['uploadprofile'])){
                                function upload(){
                                  $nameFile = $_FILES['changeprofile']['name'];
                                  $ukuranFile = $_FILES['changeprofile']['size'];
                                  $error = $_FILES['changeprofile']['error'];
                                  $tmpName = $_FILES['changeprofile']['tmp_name'];
                                
                                  //Cek apakah tidak ada gambar yang diupload
                                  if($error === 4){
                                    echo"<script>alert('tidak ada gambar yang diupload!');</script>";
                                    return false;
                                  }
                                  // cek apakah yang diupload adalah gambar
                                  $ekstensiGambarValid = ['jpg','jpeg','png'];
                                  $ekstensiGambar = explode('.',$nameFile);
                                  $ekstensiGambar = strtolower(end($ekstensiGambar));
                                  if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
                                    echo"<script>alert('File Harus Berupa jpg/jpeg/png.');</script>";
                                    return false;
                                  }
                                  // cek jika ukurannya terlalu besar
                                  if($ukuranFile > 2000000){
                                    echo"<script>alert('Ukuran File Maksimal 2Mb.');</script>";
                                    return false;
                                  }
                                  // lolos pengecekan, gambar siap di upload
                                  // generate nama gambar baru
                                  $nameFileBaru = uniqid();
                                  $nameFileBaru.='.';
                                  $nameFileBaru.=$ekstensiGambar;
                                  move_uploaded_file($tmpName,'assets_profile_picture/'.$nameFileBaru);
                                  return $nameFileBaru;
                                }
                                $gambar = upload();
                                if(!$gambar){
                                  echo'<script>alert("Change Profile Picture Gagal");</script>';
                                }else{
                                  mysqli_query($conn, "UPDATE dataproject SET profilepicture = '$gambar' WHERE username = '$username'");
                                  echo'<script>alert("Change Profile Picture Berhasil, Website Akan Otomatis Refresh!");</script>';
                                  ?>
                                  <?php if (isset($_POST['uploadprofile'])) : ?>
                                    <p>Profile Updated &#10003;</p>
                                  <?php endif; ?>
                                  <?php
                                  require'redirect.html';
                                }
                              }
                              
                            ?>

                        </form>
                    </div>
                  </a>
                </div>
              </li>
            </ul>




            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Ingin upgrade paket?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Langsung saja hubungi admin!</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="https://api.whatsapp.com/send?phone=6282127180662&text=Hi,%20saya%20ingin%20menanyakan%20tentang%20pembuatan%20jasa%20web%20ini" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Hubungi Admin!</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Client Name</h3>
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-primary ">
                          <span class="mdi mdi-account"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"><?php echo $clientname ?></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Project Name</h3>
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-primary">
                          <span class="mdi mdi-file"></span>
                        </div>
                      </div>
                    </div>
                    <!-- Nanti Ambil Dari Database -->
                    <h6 class="text-muted font-weight-normal"><?php echo $projectname ?></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Package Option</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-primary">
                          <span class="mdi mdi-settings"></span>
                        </div>
                      </div>
                    </div>
                    <!-- Nanti Ambil Dari Database -->
                    <h6 class="text-muted font-weight-normal"><?php echo $packageoption ?></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Project Status</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-primary">
                          <span class="mdi mdi-chart-line"></span>
                        </div>
                      </div>
                    </div>
                    <!-- Nanti Ambil Dari Database -->
                    <h6 class="text-muted font-weight-normal"><?php echo $projectstatus ?></h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Transaction History</h4>
                    <!-- <canvas id="transaction-history" class="transaction-chart"></canvas> -->

                    <?php 
                    if($pernahtransaksi==="yes"){?>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Down Payment</h6>
                          <!-- Nanti ambil dari database tabel banktransaksi1 -->
                          <p class="text-muted mb-0">Transfer To Bank <?php echo $bankdownpayment ?></p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <!-- Nanti Ambil Dari Database tabel jumlahtransaksi1 -->
                          <h6 class="font-weight-bold mb-0"><?php echo $totaldowypament ?></h6>
                        </div>
                      </div>

                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Pelunasan</h6>
                          <!-- Nanti ambil dari database tabel banktransaksi2 -->
                          <p class="text-muted mb-0">Transfer To Bank <?php echo $bankpelunasan ?></p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <!-- Nanti Ambil Dari Database tabel jumlahtransaksi2 -->
                          <h6 class="font-weight-bold mb-0"><?php echo $totalpelunasan ?></h6>
                        </div>
                      </div>

                    <?php
                    }else{
                      echo'<div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Belum Pernah Melakukan Transaksi.</h6>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      </div>
                    </div>';

                    }
                    ?>
                  </div>
                </div>
              </div>


              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Revision History</h4>
                    <!-- <canvas id="transaction-history" class="transaction-chart"></canvas> -->

                    <!-- Codingan Untuk Revision History Jika Lebih Dari 1 -->
                    <?php 
                    if($pernahrevisi==="yes"){?>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1"><?php echo $revisionhistory ?></h6>
                          <p class="text-muted mb-0"><?php echo $descrevisi?></p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0"><?php echo $tanggalrevisi?></h6>
                        </div>
                      </div>
                    <?php
                    
                    while($cetak = mysqli_fetch_assoc($result)){ ?>  
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1"><?php echo $cetak['revisionhistory'] ?></h6>
                          <p class="text-muted mb-0"><?php echo $cetak['deskripsirevisi'] ?></p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0"><?php echo $cetak['tanggalrevisi'] ?></h6>
                        </div>
                      </div>  
                    <?php        
                    } 

                    }else{
                      echo'<div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Belum Pernah Melakukan Revisi.</h6>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      </div>
                    </div>';
                    }
                    ?>
                  </div>
                </div>
              </div>



              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Project Requirement<p class="text-muted mb-0">Mohon Upload Semua Requirement Ke Dalam 1 Folder Google Drive, Kemudian Submit Link Google Drive Nya Disini. (Kami Akan Memberitahu File Mana Saja Yang Sudah Sesuai, Yang Tidak Sesuai, Dan Belum Diberikan).</p></h4>
                    
                  
                    <form action="" method="post">
                        <input type="text" name="linkdrive" id="linkdrive" class="form-control" placeholder="Link G-Drive"/> 
                        <!-- <button class="btn btn_red" type="submit" name="uploadlink" id="uploadlink"> Submit </button> -->
                        <br>
                        <button type="submit" name="uploadlink" id="uploadlink" class="btn btn-danger btn-icon-text">
                          <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit
                        </button>
                        <?php 
                          // cek client sudah pernah update link atau belom
                          $result3 = mysqli_query($conn, "SELECT * FROM linkfolderproject WHERE clientname = '$clientname'");
                          if( isset($_POST["uploadlink"])) {
                            $link = $_POST['linkdrive'];
                            if( mysqli_fetch_assoc($result3) ) {
                              mysqli_query($conn, "UPDATE linkfolderproject SET linkfolder = '$link' WHERE clientname = '$clientname'");
                              ?>
                              <p style="display: inline;">Link Updated &#10003;</p>
                              <?php
                            }else{
                              mysqli_query($conn, "INSERT INTO linkfolderproject VALUES('', '$clientname', '$projectname', '$link')");
                              ?>
                              <p style="display: inline;">Link Uploaded &#10003;</p>
                              <?php
                            }
                          }
                        ?>

                    </form>
                    <!-- <canvas id="transaction-history" class="transaction-chart"></canvas> -->

                    
                    <!-- Codingan Yang Membagi Menjadi 3 Section (Default,Addon,Revision) -->
                    <!-- Default Menu -->
                    <br>
                    <br>
                    <a class="nav-link collapsed btn btn-success btn-lg btn-block" data-toggle="collapse" href="#default-requirement" aria-expanded="false" aria-controls="default-requirement">
                        <span style="color:#fff;">Default Requirement</span>
                        <i class="mdi mdi-menu float-right"></i>
                      </a>
                      <div class="collapse" id="default-requirement" style="">
                        <ul class="nav flex-column sub-menu">
                          <?php 
                          if($statuskebutuhan !=="cukup"){?>
                          <?php
                          while($cetak = mysqli_fetch_assoc($result2)){ ?>
                            <div class="preview-list">  
                              <div class="preview-item border-bottom">
                                <div class="preview-thumbnail"></div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                  <div class="flex-grow">
                                    <h6 class="preview-subject"><?php echo $cetak['requirement']?></h6>
                                    <p class="text-muted mb-0"><?php echo $cetak['descrequirement']?></p>
                                  </div>
                                  <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted"> <?php //echo $cetak['statusrequirement']?> </p>
                                    <?php 
                                    if ($cetak['statusrequirement'] === 'sudah terpenuhi'){?>
                                      <label class="badge badge-success">Approved</label>
                                      <!-- <input type="checkbox" checked onclick="return false;" > -->
                                    <?php
                                    }elseif(($cetak['statusrequirement'] === 'revisi')){?>
                                      <!-- <span>&#x2716;</span> -->
                                      <label class="badge badge-danger">Revision</label>
                                    <?php
                                    }else{?>
                                      <!-- <input type="checkbox" checked disabled> -->
                                      
                                      <label class="badge badge-warning">Waiting For Assets </label>
                                    <?php
                                    }
                                    ?>
                                  </div>
                                </div>
                              </div>  
                            </div>  
                          <?php        
                          } 
                          }else{
                            echo'<br> <div class="preview-item border-bottom">
                                <div class="preview-thumbnail"> </div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                  <div class="flex-grow">
                                    <h6 class="preview-subject">Sudah Terpenuhi.</h6>
                                    <p class="text-muted mb-0"></p>
                                  </div>
                                  <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted"></p>
                                  </div>
                                </div>
                              </div>';
                          }
                          ?>
                        </ul>
                      </div>

                      <!-- Addon Menu -->
                      <br>
                      <a class="nav-link collapsed btn btn-primary btn-lg btn-block" data-toggle="collapse" href="#addon-requirement" aria-expanded="false" aria-controls="addon-requirement">
                        <span style="color:#fff;">Addon Requirement</span>
                        <i class="mdi mdi-menu float-right"></i>
                      </a>
                      <div class="collapse" id="addon-requirement" style="">
                        <ul class="nav flex-column sub-menu">
                        <?php 
                          if($addon === "yes"){?>
                          <?php
                          $result_addon = mysqli_query($conn,"SELECT * FROM dataproject WHERE username = '$ceklangganan'");
                          while($cetak = mysqli_fetch_assoc($result_addon)){ 
                            if($cetak['requirementaddon']!=="-"){
                              ?>
                            <div class="preview-list">  
                              <div class="preview-item border-bottom">
                                <div class="preview-thumbnail"></div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                  <div class="flex-grow">
                                    <h6 class="preview-subject"><?php echo $cetak['requirementaddon']?></h6>
                                    <p class="text-muted mb-0"><?php echo $cetak['descrequirementaddon']?></p>
                                  </div>
                                  <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted"> <?php //echo $cetak['statusrequirement']?> </p>
                                    <?php 
                                    if ($cetak['statusrequirementaddon'] === 'sudah terpenuhi'){?>
                                      <label class="badge badge-success">Approved</label>
                                      <!-- <input type="checkbox" checked onclick="return false;" > -->
                                    <?php
                                    }elseif(($cetak['statusrequirementaddon'] === 'revisi')){?>
                                      <!-- <span>&#x2716;</span> -->
                                      <label class="badge badge-danger">Revision</label>
                                    <?php
                                    }else{?>
                                      <!-- <input type="checkbox" checked disabled> -->
                                      
                                      <label class="badge badge-warning">Waiting For Assets </label>
                                    <?php
                                    }
                                    ?>
                                  </div>
                                </div>
                              </div>  
                            </div>
                            <?php
                            }
                            ?>
                          <?php        
                          } 
                          }else{
                            echo'<br> <div class="preview-item border-bottom">
                                <div class="preview-thumbnail"> </div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                  <div class="flex-grow">
                                    <h6 class="preview-subject">Tidak ada addon.</h6>
                                    <p class="text-muted mb-0"></p>
                                  </div>
                                  <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted"></p>
                                  </div>
                                </div>
                              </div>';
                          }
                          ?>
                        </ul>
                      </div>

                      <!-- Revision Menu -->
                      <br>
                      <a class="nav-link collapsed btn btn-warning btn-lg btn-block" data-toggle="collapse" href="#revision-requirement" aria-expanded="false" aria-controls="revision-requirement">
                        <span style="color:#fff;">Revision Requirement</span>
                        <i class="mdi mdi-menu float-right"></i>
                      </a>
                      <div class="collapse" id="revision-requirement" style="">
                        <ul class="nav flex-column sub-menu">
                          <?php 
                          if($revisi ==="yes"){?>
                          <?php
                          $result5 = mysqli_query($conn,"SELECT * FROM dataproject WHERE username = '$ceklangganan'");
                          while($cetak = mysqli_fetch_assoc($result5)){ ?>
                            <div class="preview-list">  
                              <div class="preview-item border-bottom">
                                <div class="preview-thumbnail"></div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                  <div class="flex-grow">
                                    <h6 class="preview-subject"><?php echo $cetak['requirementrevisi']?></h6>
                                    <p class="text-muted mb-0"><?php echo $cetak['descrequirementrevisi']?></p>
                                  </div>
                                  <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted"> <?php //echo $cetak['statusrequirement']?> </p>
                                    <?php 
                                    if ($cetak['statusrequirementrevisi'] === 'sudah terpenuhi'){?>
                                      <label class="badge badge-success">Approved</label>
                                      <!-- <input type="checkbox" checked onclick="return false;" > -->
                                    <?php
                                    }elseif(($cetak['statusrequirementrevisi'] === 'revisi')){?>
                                      <!-- <span>&#x2716;</span> -->
                                      <label class="badge badge-danger">Revision</label>
                                    <?php
                                    }else{?>
                                      <!-- <input type="checkbox" checked disabled> -->
                                      
                                      <label class="badge badge-warning">Waiting For Assets </label>
                                    <?php
                                    }
                                    ?>
                                  </div>
                                </div>
                              </div>  
                            </div>  
                          <?php        
                          } 
                          }else{
                            echo'<br> <div class="preview-item border-bottom">
                                <div class="preview-thumbnail"> </div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                  <div class="flex-grow">
                                    <h6 class="preview-subject">Tidak ada revisi.</h6>
                                    <p class="text-muted mb-0"></p>
                                  </div>
                                  <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <p class="text-muted"></p>
                                  </div>
                                </div>
                              </div>';
                          }
                          ?>
                        </ul>
                      </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Total Harga</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <!-- Nanti ambil dari database -->
                          <h2 class="mb-0"><?php echo $totalharga ?></h2> 
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                        </div>
                        <!-- <h6 class="text-muted font-weight-normal">11.38% Since last month</h6> -->
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-cash text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Project Start</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><? echo $projectstart ?></h2>
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+8.3%</p> -->
                        </div>
                        <!-- <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6> -->
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg  mdi mdi-calendar-clock text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Project Deadline</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo $projectdeadline ?></h2>
                          <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p> -->
                        </div>
                        <!-- <h6 class="text-muted font-weight-normal">2.27% Since last month</h6> -->
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-calendar-check text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <!-- Script Biar Gaada Resubmit -->
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>

    <!-- Script Biar Setelah Choose File Dapet Namanya -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('#changeprofile').change(function() {
        
        var i = $(this).prev('label').clone();
        var file = $('#changeprofile')[0].files[0].name;
        if(file.length>18){
          let result = file.substring(0,5);
          var file2 = $('#changeprofile')[0].files[0].name;
          let result2 = file2.substring(file2.length - 10);
          $(this).prev('label').text(' '+result+'...'+result2);
        }else{
          $(this).prev('label').text(' '+file);
        }
        
      });
    </script>
    <script>
      var myLink = document.getElementById('live-preview');
      myLink.onclick = function(){
        alert("Maaf live preview untuk website anda belum tersedia.");
        }
    </script>
        <script>
      var myLink = document.getElementById('folder-asset-client');
      myLink.onclick = function(){
        alert("Maaf link folder untuk asset anda belum tersedia.");
        }
    </script>
  </body>
</html>


