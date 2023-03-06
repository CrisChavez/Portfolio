<?php

$nombre = $_POST ["nombre"];
$correo = $_POST ["correo"];
$asunto = $_POST ["asunto"];
$mensaje = $_POST ["mensaje"];
$enviar = $_POST ["enviar"];

$formcontent="
    Nombre: $nombre \n
    Correo Electrónico: $correo \n
    Asunto: $asunto \n
    Mensaje: $mensaje \n
    Botón Enviar: $enviar \n
";

$recipient = "Cristianarielchavez@outlook.com.ar";

$subject = "Contacto Vía CV Online | $asunto";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>