<?php
$name = $_POST['nombre'];
$mail = $_POST['mail'];
$message = $_POST['mensaje'];

$header = 'From: '. $mail . " \r\n";
$header = "X-Mailer: PHP/". phpversion() . " \r\n";
$header = "Mime-Version: 1.0  \r\n";
$header = "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: ". $name . " \r\n";
$message = "Su e-mail es: ". $mail . " \r\n";
$message = "Mensaje: ". $_POST['message'] . " \r\n";
$message = "Enviado el: ". date('d/m/y', time());

$para = 'cristinbmaia@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);
header("Location:index.html");
?>