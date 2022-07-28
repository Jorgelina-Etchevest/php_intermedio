<?php

$nombre_form = $_POST["nombre"];
$apellido_form = $_POST["apellido"];
$email_form = $_POST["email"];
$mensaje_form = $_POST["mensaje"];

$cuerpoMail = "Nombre: " . $nombre_form. "/r/n"
."Apellido: ". $apellido_form."/r/n"
."Correo Electrónico: " . $email_form."/r/n"
."Mensaje: " . $mensaje_form;

mail("etchevestjor@gmail.com", "MENSAJE DESDE NUESTRO SITIO", $cuerpoMail); 

$conexion = mysqli_connect("localhost", "id18898029_jorgelina_etchevest","DV)wCV=*f5scp3~F", "id18898029_php_intermedio") or exit ("No se pudo conectar a base de datos");


mysqli_query ($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form' , '$email_form','$mensaje_form')");


mysqli_close($conexion);

header(("location: contacto.php?e=ok"));

?>