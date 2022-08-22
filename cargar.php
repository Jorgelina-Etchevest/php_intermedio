<?php
session_start();
if(isset($_SESSION ['admin'])){

include ('header.php')?>

    <section class="contactoContenido">

    <?php
        $nr1= rand(0,9);
        $nr2 = rand(0,9);
        $nr3 = rand (0,9);
        $letra = array ('a','f','m','t','y','r','v');
        $simbolo = array ('%','$','*','/','!');
        $mezcla_letra = rand(0,6);
        $mezcla_simbolo = rand (0,4);

        $_SESSION['codigo_captcha'] = $nr1.$letra[$mezcla_letra].$nr2.$simbolo[$mezcla_simbolo].$nr3;
    ?>

    <form action="enviarContacto.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="nombre" class="contactoInput" placeholder="Ingrese su nombre" require>
        <input type="text" name="apellido" class="contactoInput" placeholder="Ingrese su apellido" require>
        <input type="email" name="email" class="contactoInput" placeholder="Ingrese su e-mail"require>
        <input type="file" name="imagen" id="" placeholder="Imagen"require>
        <select name="estado" id="">
            <option value="proceso">En proceso...</option>
            <option value="finalizado">Finalizado</option>


        </select>
        <img src="captcha.php" alt="">
        <input type="text" name="captcha">
        <input type="submit" value = "Inscribirme">
    </form>

    <form action="datos_almacenados.php" method="POST" class="consulta">
        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Deje su comentario aquí" require></textarea>
        <input type="submit" value = "Enviar Consulta">
    </form>

    <?php 
    if (isset($_GET["error_codigo"])){
        echo "<h3>Código de verificación incorrecto</h3>";
    }
    
    if (isset($_GET["e"])){
        echo "<h3>Su inscripción ha sido enviada con éxito</h3>";
    }

    if (isset($_GET["error"])){
        echo "<h3>Imagen incorrecta. Verificar formato y tamaño</h3>";
    }
    ?>
    </section>
    
<?php
}else{
header('location: cargar.php');
}
?>

<body>
    





