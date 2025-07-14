<?php
header("Content-Type: image/png");

// Gambar 300x200
$image = imagecreate(800, 600);

// Warna
$white = imagecolorallocate($image, 255, 255, 255);
$green = imagecolorallocate($image, 0, 255, 0);
$purple = imagecolorallocate($image, 128, 0, 128);

// Bulatan tengah
imageellipse($image, 150, 100, 100, 100, $green);

// Garis ungu
imageline($image, 50, 50, 250, 150, $purple);

// Papar
imagepng($image);
imagedestroy($image);
?>
