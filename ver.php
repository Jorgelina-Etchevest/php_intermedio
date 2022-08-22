<?php
include ('header.php')?>




<section class="contenedor_alumno">

<?php 
    include('conectar.php');
    $consulta_bd = mysqli_query($conexion, "SELECT * FROM consultas");

    while($mostrar_datos=mysqli_fetch_assoc($consulta_bd)){
    ?>

    <section class="caja_alumnos">
    <h3 class="alumno"><?php echo $mostrar_datos["nombre"]. " " . $mostrar_datos["apellido"];?></h3>

    <h4>ESTADO: <?php echo $mostrar_datos["estado"]?></h4>

    <p><a class="eliminar" href="editar_estado.php?id_consulta=<?php echo $mostrar_datos["id_consulta"];?>">FINALIZAR INSCRIPCIÓN</a></p>

    <p><a class="eliminar" href="eliminar.php?id_consulta=<?php echo $mostrar_datos["id_consulta"];?>">ELIMINAR INSCRIPCIÓN</a></p>

    </section>

    <?php }?>

</section>

<footer>
    <p class="pie">Teléfono: 351 8193615</p>
    <p class="pie">E-mail: joretchevest@hotmail.com</p>
</footer>

</body>
</html>
