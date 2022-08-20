<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/contacto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@700&family=Montserrat:ital,wght@1,200&family=Oswald&display=swap" 
          rel="stylesheet">
    <title>CLASES DE ECONOMÍA</title>
    
</head>

<body>

<header>
    <nav> 
        <ul class="linea"> 
        <li><a href="index.php">HOME</a></li>
        <li><a href="cursos.php">CURSOS</a></li>
        <li><a href="contacto.php">CONTACTO</a></li>
        <li><a href="ver.php">INSCRIPTOS</a></li>
        <li><a href="salir.php">SALIR</a></li>
        </ul>
    </nav>

    <h1>CLASES DE ECONOMÍA</h1>
</header>


<?php
session_start();
if(isset($_SESSION['admin'])){
?>

    <section class="contactoContenido">

    <form action="enviarContacto.php" method="POST">
        <input type="text" name="nombre" class="contactoInput" placeholder="Ingrese su nombre" require>
        <input type="text" name="apellido" class="contactoInput" placeholder="Ingrese su apellido" require>
        <input type="email" name="email" class="contactoInput" placeholder="Ingrese su e-mail"require>
        <input type="submit" value = "Inscribirme">
    </form>

    <form action="datos_almacenados.php" method="POST" class="consulta">
        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Deje su comentario aquí" require></textarea>
        <input type="submit" value = "Enviar Consulta">
    </form>

    <?php 
    if (isset($_GET["e"])){
        echo "<h3>Su consulta fue enviada con éxito</h3>";
    }
    ?>
    </section>


<?php
}else{
header('location: cargar.php');
}
?>







