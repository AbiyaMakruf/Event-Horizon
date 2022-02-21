<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

//Load Composer's autoloader

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$email = $_POST["email"]; 

ob_start(); // begin collecting output

include 'template-send-mail/template_send_mail.php';

$result = ob_get_clean();

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'the-eventhorizon.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'admin@the-eventhorizon.com';                     //SMTP username
    $mail->Password   = 'Yiis5413';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('admin@the-eventhorizon.com', 'Admin Event Horizon');
    $mail->addAddress($email);    //Name is optional
    $mail->addReplyTo('admin@the-eventhorizon.com', 'Information');
    $mail->addCC('admin@the-eventhorizon.com');
    $mail->addBCC('admin@the-eventhorizon.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Terima Kasih Sudah Mengisi Formulir Order';
    $mail->Body    = $result;
    $mail->AltBody = 'Terima Kasih Sudah Mengisi Formulir Order';
    $mail->send();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

