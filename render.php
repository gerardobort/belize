<?php
 
$fullname = urldecode($_GET['fullname']);
$rImg = imagecreatefromjpeg("artwork/v1.jpg");
$color = imagecolorallocate($rImg, 63, 71, 73);

$font = 'artwork/fonts/sign.ttf';
$font1 = 'artwork/fonts/badhand.ttf';
$font2 = 'artwork/fonts/celine.ttf';

imagettftext($rImg, 24, 0, 260, 405, $color, $font2, $fullname);
imagettftext($rImg, 22, 0, 320, 458, $color, $font2, date('dS', time()));
imagettftext($rImg, 22, 0, 480, 458, $color, $font2, date('F', time()));
imagettftext($rImg, 22, 0, 700, 458, $color, $font2, date('y', time()));

header('Content-type: image/jpeg');
imagejpeg($rImg, NULL, 100);
