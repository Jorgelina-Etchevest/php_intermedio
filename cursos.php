<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/cursos.css">
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

    
<section class="cursosContenido">

<h2>NUESTROS CURSOS</h2>

<ul class="materias">
    <li><a href="cursos.php? producto=pr">PRINCIPIOS</a></li>
    <li><a href="cursos.php? producto=mi">MICROECONOMÍA</a></li>
    <li><a href="cursos.php? producto=ma">MACROECONOMÍA</a></li>
</ul>

<?php
if(isset($_GET['producto'])){
switch($_GET['producto']){
    case 'pr':
        $producto = 'PRINCIPIOS Y ESTRUCTURA DE LA ECONOMÍA';
        $precio= "$4500";
        $descripción="CURSO INTRODUCTORIO DE ECONOMÍA. Demanda, oferta y mercado.";
        break;

    case  'mi':
        $producto = 'MICROECONOMÍA';
        $precio= "$5000";
        $descripción="MICROECONOMÍA INTERMEDIA. Consumidor, productor y mercados.";
        break;  
        
    case  'ma':
        $producto = 'MACROECONOMÍA';
        $precio= "$5500";
        $descripción="MACROECONOMÍA INTERMEDIA. Mercado de bienes, mercado del dinero y modelo IS/LM";
        break;

}}
?>


<div class="cursoDescripcion">

<h3><?php echo $producto?></h3>
<h4><?php echo $precio?></h4>
<h5><?php echo $descripción?></h5>

</div>
</section>

<footer>
    <p class="pie">Teléfono: 351 8193615</p>
    <p class="pie">E-mail: joretchevest@hotmail.com</p>
</footer>

</body>
</html>