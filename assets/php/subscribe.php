<header>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" type="text/css" href="....'path to ur sweet alert.css'"> -->
<script type="text/javascript" src="../js/sweetalert2/sweetalert2.all.min.js"></script>
<script type="text/javascript">

function myFx(){
        swal.fire({ 
              icon: "success",
              title: "Berlangganan Berhasil!",
              text: "Mohon cek email anda",
              footer: "Jika email tidak masuk, cek folder spam anda"
        }).then(function(){
                window.location.href = "redirect.html";
        });
}
</script>

</header>

<?php
require 'functions.php';

if( isset($_POST["subscribe"])) {

    if( subscribe($_POST) > 0 ) {
        require('send-mail-subscribe.php');
        echo '<script type="text/javascript">
        myFx();
      </script>';
        exit;
    } else {
        echo mysqli_error($conn);
    }
}
?>