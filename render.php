<?php
//phpinfo();die;
 
$fullname = urldecode($_GET['fullname']);

//Carregar imagem
$rImg = imagecreatefromjpeg("artwork/v1.jpg");
 
//Definir cor
$cor = imagecolorallocate($rImg, 0, 0, 0);

//$font = 'arial.ttf';
//imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);

//Escrever nome
imagestring($rImg, 5, 126, 22, $fullname, $cor);
 
//Header e output
header('Content-type: image/jpeg');
imagejpeg($rImg, NULL, 100);
 
