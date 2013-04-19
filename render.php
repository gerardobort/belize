<?php
 
$fullname = substr(urldecode($_GET['fullname']), 0, 17);
$rImg = imagecreatefromjpeg("artwork/v1.jpg");
$color = imagecolorallocate($rImg, 63, 71, 73);

$font = 'artwork/fonts/sign.ttf';
$font1 = 'artwork/fonts/badhand.ttf';
$font2 = 'artwork/fonts/celine.ttf';

imagettftext($rImg, 28, 0, 260, 407, $color, $font2, $fullname);
imagettftext($rImg, 24, 0, 320, 458, $color, $font2, date('dS', time()));
imagettftext($rImg, 24, 0, 470, 458, $color, $font2, date('F', time()));
imagettftext($rImg, 24, 0, 700, 458, $color, $font2, date('y', time()));

header('Content-type: image/jpeg');
imagejpeg($rImg, NULL, 100);
