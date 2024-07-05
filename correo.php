<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$tel = $_POST["tel"];
$message = $_POST["message"];

$destino = "maxwellwebdev2@gmail.com";
$asunto = $subject;
$cuerpo =
     "Formulario alquiler \n " .

     "Nombre: " . "$name  \n" .
     "Email: " . "$email  \n" .
     "Telefono: " . "$tel \n" .
     "Mensaje: " . "$message \n"

;

$headers = "MIME-Version: 1.0/r/n";
$headers .= "Content-type: text/html; charset=utf8/r/n";

$headers .="FROM: $name <$email>/r/n";
mail($destino,$asunto,$cuerpo,$headers);
header('Location: index.html');
?>


