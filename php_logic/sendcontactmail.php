<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('phpmailer/Exception.php');
require('phpmailer/PHPMailer.php');
require('phpmailer/SMTP.php');
$email = $_POST['cemail'];
$name = $_POST['cname'];
$msg = $_POST['cmsg'];
if(filter_var($email,FILTER_SANITIZE_EMAIL)){
  $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username  = 'mymusicprodtestemail@gmail.com';              // SMTP felhnev
    $mail->Password  = 'Asd12345qwe';           // SMTP jelszó
    //Recipients
    $mail->setFrom('mymusicprodtestemail@gmail.com');                 //Kitől kapja az üzenetet
    $mail->CharSet = 'UTF-8';
    $mail->Mailer = "smtp";
    $mail->addAddress($email);                     // Felhasználó email címe
    $mail->addReplyTo('mymusicprodtestemail@gmail.com', 'Information');         //Kinek válaszoljon
    $mail->addCC('mymusicprodtestemail@gmail.com');
    $mail->addBCC('mymusicprodtestemail@gmail.com');             //kinek küldje el még
    // EMAIL KÜLDÉS
    $mail->isHTML(true);                          // Set email format to HTML
    $mail->Subject = 'Körös Toroki nyaraló foglalása';
    $mail->Body    = '<h1>Kedves foglaló!,</h1> <br>
    Köszönjük, hogy minket választott! 24 órán belül felvesszük magával a kapcsolatot! <br>
    Üdv, <br> Aradi László!';
    $mail->send();
}
?>
