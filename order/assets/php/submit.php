<header>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" type="text/css" href="....'path to ur sweet alert.css'"> -->
<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<script type="text/javascript">

function form(){
        swal.fire({ 
              icon: "success",
              title: "Order anda akan segera di proses!",
              text: "Mohon hubungi admin."
        }).then(function(){
                window.location.href = "https://the-eventhorizon.com/";
        });
}
</script>

</header>

<?php

$servername = "localhost";
$database = "theh6313_akun";
$username = "theh6313_abiyamf";
$password = "Yiis5413";

// koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $database);

// Insert data ke database
if( isset($_POST["uploadform"])){
// Daftar Variabel
$email = $_POST["email"];
$username = $_POST["username"];
$nama_depan = $_POST["namadepan"];
$nama_belakang = $_POST["namabelakang"];
$instansi = $_POST["instansi"];
$nama_project = $_POST["namaproject"];
$paket_utama = $_POST["paketutama"];
foreach ($_POST['pakettambahan'] as $value) {
        $paket_tambahan.= $value.", ";
}
//$paket_tambahan = implode(',',$_POST['pakettambahan']);

$cara_order = $_POST["caraorder"];
$kebijakan_privasi = $_POST["kebijakanprivasi"];
$syarat_ketentuan = $_POST["syaratketentuan"];

mysqli_query($conn, "INSERT INTO dataform VALUES('', '$email','$username','$nama_depan','$nama_belakang','$instansi','$nama_project','$paket_utama','$paket_tambahan','$cara_order','$kebijakan_privasi','$syarat_ketentuan')");
require('send-mail-form.php');
echo '<script type="text/javascript"> form(); </script>';
}


?>