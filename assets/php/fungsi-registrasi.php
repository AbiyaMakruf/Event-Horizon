<header>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" type="text/css" href="....'path to ur sweet alert.css'"> -->
<script type="text/javascript" src="../js/sweetalert2/sweetalert2.all.min.js"></script>
<script type="text/javascript">

function myFn(){
        swal.fire({ 
              icon: "error",
              title: "Username sudah terdaftar!",
              text: "Silahkan log in",
        }).then(function(){
                window.location.href = "redirect.html";
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


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data) {

    global $conn;


    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);


    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo '<script type="text/javascript">
        myFn();
      </script>';
        return false;
        exit;
    }


    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    //Template Database ('id','username','clientname','instansi','projectname','packageoption','projectstatus','sudahpernahtransaksi','bankdownpayment','totaldownpayment','bankpelunasan','totalpelunasan','totalharga','projectstart','projectdeadline','sudahpernahrevisi','revisionhistory','tanggalrevisi','deskripsirevisi','requirement','descrequirement','statusrequirement','addon','requirementaddon','descrequirementaddon','statusrequirementaddon','revisi','requirementrevisi','descrequirementrevisi','statusrequirementrevisi','profilepicture')
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password','no')");
    mysqli_query($conn, "INSERT INTO dataproject (id,username,clientname,instansi,projectname,packageoption,projectstatus,sudahpernahtransaksi,bankdownpayment,totaldownpayment,bankpelunasan,totalpelunasan,totalharga,projectstart,projectdeadline,sudahpernahrevisi,revisionhistory,tanggalrevisi,deskripsirevisi,requirement,descrequirement,statusrequirement,addon,requirementaddon,descrequirementaddon,statusrequirementaddon,revisi,requirementrevisi,descrequirementrevisi,statusrequirementrevisi,profilepicture) VALUES ('','$username','-','-','-','-','-','no','-','-','-','-','-','-','-','no','-','-','-','Title Website','Judul/Nama Website Simpah Dalam .txt/.docs','belum terpenuhi','no','-','-','-','no','-','-','-','profile_default.jpg')");
    //mysqli_query($conn, "INSERT INTO dataproject VALUES('','$username','-','-','-','-','-','no','-','-','-','-','-','-','-','no','-','-','-','Title Website','Judul/Nama Website Simpah Dalam .txt/.docs','belum terpenuhi','no','-','-','-','no','-','-','-','profile_default.jpg')");

    return mysqli_affected_rows($conn);

}

function subscribe ($data) {

    global $conn;


    $email = strtolower(stripslashes($data["email"]));


    // tambahkan email ke database
    mysqli_query($conn, "INSERT INTO langganan VALUES('', '$email')");

    return mysqli_affected_rows($conn);

}



?>