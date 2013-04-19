<?php
//phpinfo();die;
 
$fullname = urldecode($_GET['fullname']);

//Carregar imagem
$rImg = imagecreatefromjpeg("artwork/v1.jpg");
 
//Definir cor
$color = imagecolorallocate($rImg, 0, 0, 0);

$font = 'artwork/fonts/badhand.ttf';
$font = 'artwork/fonts/sign.ttf';
imagettftext($rImg, 20, 0, 260, 405, $color, $font, $fullname);

//Escrever nome
//imagestring($rImg, 5, 260, 390, $fullname, $color);
 
//Header e output
header('Content-type: image/jpeg');
imagejpeg($rImg, NULL, 100);
 
