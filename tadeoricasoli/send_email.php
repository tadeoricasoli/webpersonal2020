<?php
$destino = "ricasolit@gmail.com";
$nombre = $_POST["contactName"];
$email = $_POST["contactEmail"];
$mensaje = $_POST["contactMessage"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
/*header("Location:gracias.html");*/
?>