<?php

//Creamos la imagen del captcha

$imagen = imagecreate(70,30);
// le damos un color de fondo
$aleatoria = rand(100000, 999999);
$fondo = imagecolorallocate($imagen, 66, 139, 202);
//color de texto
$texto = imagecolorallocate($imagen,255, 255, 255);
//relleno de la imagen

imagefill($imagen, 90, 0, $fondo);
//creamos una cadena de numeros
imagestring($imagen, 80, 0, 0, $aleatoria, $texto);

//imprimir la imagen

header('content-type: image/png');
imagepng($imagen);

?>


