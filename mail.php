<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

// Enable SMTP debugging
$mail->SMTPDebug = 0;

// Set up SMTP server details
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'zujovic.marko@gmail.com';
$mail->Password = 'zrwqcimurhyhluuj';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set up email content
$mail->setFrom($_POST['email'], $_POST['firstname'] . ' ' . $_POST['lastname']);
$mail->addAddress('zujovic.marko@gmail.com');
$mail->Subject = 'Upit za rezervaciju apartmana';
$mail->Body = 'Ime: ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . "\r\n" .
    'E-mail: ' . $_POST['email'] . "\r\n" .
    'Broj telefona: ' . $_POST['brojtelefona'] . "\r\n" .
    'Apartman: ' . ($_POST['apartman1'] ?? $_POST['apartman2']) . "\r\n" .
    'Datum od: ' . $_POST['datefrom'] . "\r\n" .
    'Datum do: ' . $_POST['dateto'] . "\r\n" .
    'Poruka: ' . $_POST['poruka'];

$mail->send();
