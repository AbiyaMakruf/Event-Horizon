<?php
session_start();

if( !isset($_SESSION["login"])) {
    header("Location: ../");
    exit;
}


if($_COOKIE['cooperate'] === "yes"){
  require 'sweet-alert.php';
  echo '<script type="text/javascript">
  myFl();
</script>';
  //echo "<script> alert('Anda Sedang Menjalin Kerja Sama Dengan Event Horizon') </script>";
  //require("redirect-cooperate.html");
  exit;
}else{
  require 'sweet-alert.php';
  echo '<script type="text/javascript">
  myFk();
</script>';
  exit;
}
?>