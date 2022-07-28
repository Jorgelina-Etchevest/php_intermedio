<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$texto = "<h4> Mensaje: " . $_POST['mensaje'] . "</h4>";

$archivo=fopen("archivo.txt", "a");
fputs($archivo, $texto);
echo "<p> Datos almacenados</p>";

?>

<p><a href="lectura_datos.php">LEER LOS DATOS</a></p>

    
</body>
</html>

