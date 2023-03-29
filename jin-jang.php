<?php

header('content-type: image/png');
$w = 500;
$img = imagecreatetruecolor($w, $w);

// Stores the colors
$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
$grey = imagecolorallocate($img, 80, 80, 80);
$red = imagecolorallocate($img, 255, 0, 0);

// Background
imagefill($img, 0, 0, $grey);

imagefilledarc($img, $w/2, $w/2, $w/3, $w/3, 90, 270, $black, IMG_ARC_PIE);
imagefilledarc($img, $w/2, $w/2, $w/3, $w/3, 270, 90, $white, IMG_ARC_PIE);

imagefilledarc($img, $w/2, $w/3+($w/6)/2, $w/6, $w/6, 270, 90, $black, IMG_ARC_PIE);
imagefilledarc($img, $w/2, $w/3+($w/4), $w/6, $w/6, 90, 270, $white, IMG_ARC_PIE);

// White and black ball
imagefilledellipse($img, $w/2, $w/3+($w/6)/2, $w/18, $w/18, $white);
imagefilledellipse($img, $w/2, $w/3+($w/4), $w/18, $w/18, $black);

imagepng($img);
imagedestroy($img);

?>