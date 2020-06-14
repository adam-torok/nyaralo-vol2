<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('phpmailer/Exception.php');
require('phpmailer/PHPMailer.php');
require('phpmailer/SMTP.php');
$email = $_POST['email'];
$name = $_POST['name'];
$msg = $_POST['msg'];
$interval = $_POST['interval'];
if(filter_var($email,FILTER_SANITIZE_EMAIL)){
  $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username  = 'aradikorosnyaralo@gmail.com';              // SMTP felhnev
    $mail->Password  = 'koros328612';           // SMTP jelszó
    //Recipients
    $mail->setFrom('aradikorosnyaralo@gmail.com');                 //Kitől kapja az üzenetet
    $mail->CharSet = 'UTF-8';
    $mail->Mailer = "smtp";
    $mail->addAddress($email);                     // Felhasználó email címe
    $mail->addReplyTo('aradikorosnyaralo@gmail.com', 'Information');         //Kinek válaszoljon
    // EMAIL KÜLDÉS
    $mail->isHTML(true);                          // Set email format to HTML
    $mail->Subject = 'Körös Toroki nyaraló foglalása';
    $mail->Body    = '<h1>Kedves foglaló!,</h1> <br>

    Köszönjük, hogy minket választott! 24 órán belül felvesszük magával a kapcsolatot! <br>
    Név: ' .$name. ' <br>
    Üzeneted: '. $msg. ' <br>
    Foglalási intervallum : ' .$interval . ' <br>
    Üdv, <br> Aradi László!';
    $mail->send();
}
?>
