<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$info = $_POST['info'];


$header = 'From: '.$email ." \r\n";
$header .= "X-Mailer: PHP/". phpversion()."\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Esta reserva ha sido enviada por " .$nombre .",\r\n";
$mensaje .= "Número de telefono" .$telefono ."\r\n";
$mensaje .= "Información de la reserva" . $_POST['info'] ."\r\n";
$mensaje .= "Ha sido enviado el" .date('d/m/Y', time());


$para = 'jdavidvillenagil@gmail.com';
$asunto = 'Nueva reserva';

mail($para, $asunto, utf8_decode($mensaje),$header);

header("Location:../home.php");


