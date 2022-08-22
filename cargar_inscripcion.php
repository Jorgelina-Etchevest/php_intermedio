<?php
session_start();
if(isset($_SESSION ['admin'])){

include ('header.php')?>

<section class="contenedor_alumno">

<?php 
    include('conectar.php');
    $consulta_bd = mysqli_query($conexion, "SELECT * FROM consultas");

    while($mostrar_datos=mysqli_fetch_assoc($consulta_bd)){
    ?>

    <section class="caja_alumnos">
    <h3 class="alumno">ESTUDIANTE: <?php echo $mostrar_datos["nombre"]. " " . $mostrar_datos["apellido"];?></h3>

    <h4>ESTADO DE LA INSCRIPCIÓN: <?php echo $mostrar_datos["estado"]?></h4>

    <p><a class="eliminar" href="editar_estado.php?id_consulta=<?php echo $mostrar_datos["id_consulta"];?>">FINALIZAR INSCRIPCIÓN</a></p>

    <p><a class="eliminar" href="eliminar.php?id_consulta=<?php echo $mostrar_datos["id_consulta"];?>">ELIMINAR INSCRIPCIÓN</a></p>

    </section>

    <?php }?>

</section>
    
<?php
}else{
header('location: cargar_inscripcion.php');
}
?>

<body>
    