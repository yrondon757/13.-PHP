<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/EXception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'yrondon757@gmail.com';
$mail->Password = '57.Bar*2747';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('yrondon757@gmail.com');
$mail->addAddress('yenetson_fcbarcelona007@hotmail.com');
$mail->isHTML(true);
$mail->Subject = "Prueba desde PHP";
$mail->Body = "<h1>Prueba de correo desde PHP</h1>";
$mail->send();
