<header>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" type="text/css" href="....'path to ur sweet alert.css'"> -->
<script type="text/javascript" src="../js/sweetalert2/sweetalert2.all.min.js"></script>
<script type="text/javascript">

function myFd(){
        swal.fire({ 
              icon: "error",
              title: "Username/Password salah.",
              text: "Mohon log in kembali!",
        }).then(function(){
                window.location.href = "redirect.html";
        });
}
</script>

<script type="text/javascript">

function myFe(){
        swal.fire({ 
              icon: "error",
              title: "Username tidak terdaftar",
              text: "Silahkan registrasi",
        }).then(function(){
                window.location.href = "redirect.html";
        });
}
</script>

<script type="text/javascript">

function myFl(){
        swal.fire({ 
              icon: "error",
              title: "masuk kesini kok",
              text: "Silahkan registrasi",
        }).then(function(){
                window.location.href = "//youtube.com";
        });
}
</script>

<script type="text/javascript">

function myFg(){
        swal.fire('Anda Tidak Sedang Menjalin Kerja Sama Dengan Event Horizon.').then(function(){
                window.location.href = "../../user-menu/redirect-cooperate.html";
        });
}
</script>


</header>