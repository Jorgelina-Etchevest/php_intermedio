<?php
session_start();
$usuario=$_POST['usuario'];
$clave = $_POST['clave'];

include('conectar.php');

$consulta= mysqli_query ($conexion, "SELECT * FROM administradores WHERE usuario = 'admin' AND clave='admin123';");

if($_POST['usuario']=='admin' && $_POST['clave']=='admin123'){
    $_SESSION ['admin'] = $_POST['usuario'];
    header('location: cargar_inscripcion.php');
}else{
 header('location: ver.php?error');
}