<?php

session_start();
$conexion = mysqli_connect("localhost", "id18898029_jorgelina_etchevest","|hI-cV!bgvDaF8*O", "id18898029_php_intermedio") or exit ("No se pudo conectar a base de datos");

$codigo_captcha = $_POST['captcha'];


if($codigo_captcha == $_SESSION['codigo_captcha']){

    $nombre_form = $_POST["nombre"];
    $apellido_form = $_POST["apellido"];
    $email_form = $_POST["email"];
    $mensaje_form = $_POST["mensaje"];
    $estado_carga = $_POST["estado"];

    $nombre_imagen= $_FILES['imagen']['name'];
    $tamanio_imagen = $_FILES['imagen']['size'];
    $tipo_imagen = $_FILES['imagen']['type'];
    $tmp_imagen = $_FILES['imagen']['tmp_name'];

    $destino = 'imagenes/'. $nombre_imagen;

    
    if(($tipo_imagen != 'image/jpg'  && $tipo_imagen != 'image/png' && $tipo_imagen != 'image/jpeg'  && $tipo_imagen != 'image/gif') or $tamanio_imagen > 200000){
            header("location: cargar.php?error");
            
        }else{
            move_uploaded_file($tmp_imagen,$destino);
            mysqli_query ($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form' , '$email_form','$nombre_imagen','$mensaje_form','$estado_carga')");
            header(("location: cargar.php?e=ok"));
        } } else{
    header("location: cargar.php?error_codigo");
}


$cuerpoMail = "Nombre: " . $nombre_form. "/r/n"
."Apellido: ". $apellido_form."/r/n"
."Correo Electrónico: " . $email_form."/r/n"
."Mensaje: " . $mensaje_form;

mail("etchevestjor@gmail.com", "MENSAJE DESDE NUESTRO SITIO", $cuerpoMail); 

mysqli_close($conexion);
?>