<?php


    
$email = $_POST["email"];    
$name = $_POST["name"];
$WA = $_POST["WA"];
$pesan = $_POST["message"];
$email_message = file_get_contents($pesan);
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


mail( 'visualf2wl2021@gmail.com', 'Website F2WL' , 
"$email, $name, $pesan");


header('Location: thank-you.html');

?>
