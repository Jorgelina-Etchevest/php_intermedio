<?php

session_start();
$conexion = mysqli_connect("localhost", "id18898029_jorgelina_etchevest","V^y^e*YxY@|sZAH2", "id18898029_php_intermedio") or exit ("No se pudo conectar a base de datos");

$codigo_captcha = $_POST['captcha'];


if($codigo_captcha == $_SESSION['codigo_captcha']){

    $nombre_form = $_POST["nombre"];
    $apellido_form = $_POST["apellido"];
    $email_form = $_POST["email"];
    $mensaje_form = $_POST["mensaje"];

    mysqli_query ($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form' , '$email_form','$mensaje_form')");

    header(("location: cargar.php?e=ok"));

    
}else{
    header("location: cargar.php?error_codigo");
}


$cuerpoMail = "Nombre: " . $nombre_form. "/r/n"
."Apellido: ". $apellido_form."/r/n"
."Correo Electrónico: " . $email_form."/r/n"
."Mensaje: " . $mensaje_form;

mail("etchevestjor@gmail.com", "MENSAJE DESDE NUESTRO SITIO", $cuerpoMail); 

mysqli_close($conexion);
?>