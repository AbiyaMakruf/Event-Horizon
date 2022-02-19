<header>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" type="text/css" href="....'path to ur sweet alert.css'"> -->
<script type="text/javascript" src="../assets/js/sweetalert2/sweetalert2.all.min.js"></script>
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
              icon: "success",
              title: "Anda Sedang Menjalin Kerjasama Dengan Event Horizon.",
              text: "Progress Dari Website Anda Akan Ditampilkan Disini.",
        }).then(function(){
                window.location.href = "redirect-cooperate.html";
        });
}
</script>


<script type="text/javascript">

function myFk(){
        swal.fire({ 
              icon: "error",
              title: "Anda Tidak Sedang Menjalin Kerjasama Dengan Event Horizon.",
              text: "Jika Menurut Anda Ada Kesalahan, Silahkan Hubungi Admin.",
        }).then(function(){
                window.location.href = "redirect-not-cooperate.html";
        });
}
</script>


</header>