<?php
include("conectar.php");

$id_per = $_GET['id_consulta'];

mysqli_query($conexion, "UPDATE consultas SET estado='finalizado' WHERE id_consulta=$id_per");

header("location: cargar_inscripcion.php");