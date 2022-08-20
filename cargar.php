<?php
session_start();
if(isset($_SESSION ['admin'])){

include ('header.php')?>

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

<body>
    





