<?php

$x=480;
$y=320;

$image=imagecreate($x, $y);
$white=imagecolorallocate($image, 255, 255, 0);

imagejpeg($image);
header('Cotent-Type: image/jpeg');

?>