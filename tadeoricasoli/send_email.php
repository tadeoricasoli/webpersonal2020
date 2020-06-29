<?php
$destination = "ricasolit@gmail.com";
$name        = $_POST["contactName"];
$email       = $_POST["contactEmail"];
$message     = $_POST["contactMessage"];
$content     = "Name: " . $name . "Email: " . $email . "Message: " . $message;
mail($destination, "Contact", $content);

header("Location: http://www.tadeoricasoli.com");
?>
