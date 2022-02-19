<?php


    
$email = $_POST["email"];    
$name = $_POST["NamaBand"];
$message = $_post["message"];
$pesan = "./pesan.php";
$email_message = file_get_contents($pesan);
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


ob_start(); // begin collecting output

include 'pesan.php';

$result = ob_get_clean(); // retrieve output from myfile.php, stop buffering



mail( "visualf2wl2021@gmail.com", 'Website F2WL' ,$result,$headers);

mail( "aabbiiyyaa@gmail.com", 'Website F2WL' ,$result,$headers);

mail( $email, 'Website F2WL',$result,$headers);


header('Location: thank-you2.html');

?>
