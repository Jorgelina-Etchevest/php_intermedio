<?php
session_start();
header("Content-type:image/jpege");

$imagen_captcha = imagecreate(70,30);

$fondo = imagecolorallocate($imagen_captcha, 120, 150, 120);
$texto = imagecolorallocate($imagen_captcha, 82, 4 ,34);

imagestring($imagen_captcha,5, 10, 5, $_SESSION['codigo_captcha'], $texto);

imagejpeg($imagen_captcha);

