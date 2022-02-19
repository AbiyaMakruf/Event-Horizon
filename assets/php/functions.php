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
        echo "<script>
                alert('username sudah terdaftar!')
              </script>";
              require('redirect.html');
        return false;
    }


    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$email', '$password','no')");
    mysqli_query($conn, "INSERT INTO dataproject VALUES('', '$username', '-', '-','-','-','-','-','-','-','-','-','-','-')");

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