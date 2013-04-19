<?php
 
$fullname = urldecode($_GET['fullname']);
$rImg = imagecreatefromjpeg("artwork/v1.jpg");
$color = imagecolorallocate($rImg, 0, 0, 0);

$font = 'artwork/fonts/sign.ttf';
$font2 = 'artwork/fonts/badhand.ttf';

imagettftext($rImg, 20, 0, 260, 405, $color, $font2, $fullname);
//imagettftext($rImg, 20, 0, 280, 505, $color, $font, date('dd', time()));

imagettftext($rImg, 20, 0, 320, 458, $color, $font2, date('d', time()));
imagettftext($rImg, 20, 0, 480, 458, $color, $font2, date('F', time()));
imagettftext($rImg, 20, 0, 700, 458, $color, $font2, date('y', time()));

header('Content-type: image/jpeg');
imagejpeg($rImg, NULL, 100);
