<?php
session_start();
if(isset($_SESSION ['admin'])){
?>

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
            <li><a href="salir_inscripcion.php">SALIR</a></li>
            </ul>
        </nav>
    
        <h1>CLASES DE ECONOMÍA</h1>
    </header>


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