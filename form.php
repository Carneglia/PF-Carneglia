<?php

$nombre = $_POST ["name"];
$mail = $_POST ["email"];
$ubicacion = $_POST ["ubicacion"];
$mensaje = $_POST ["comentario"];

$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "Su email es" . $email . ",\r\n";
$mensaje .= "Su ubicacion es" . $ubicacion . ",\r\n";
$mensaje .= "Mensaje" . $_POST ["comentario"] . ",\r\n";
$mensaje .= "Enviado el" . date ('d/m/Y', time());

$para = 'cd.carneglia@gmail.com';
$asunto = 'Este mail fue enviado desde el sitio Rotisería 3'

mail($para, $asunto, utf8_decode($mensaje), $header)
header('location:/pages/exito.html');
?>