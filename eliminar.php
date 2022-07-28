<?php
include('conectar.php');

$id_per = $_GET['id_consulta'];

mysqli_query($conexion, "DELETE FROM consultas WHERE id_consulta=$id_per");

header("location: ver.php");