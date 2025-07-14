<?php
header("Content-Type: image/png");

//image 300x150
$image = imagecreate(300, 150);

// Warna
$white = imagecolorallocate($image, 255, 255, 255); // Latar
$red = imagecolorallocate($image, 255, 0, 0);        // Kotak
$black = imagecolorallocate($image, 0, 0, 0);        // Teks

// Kotak merah
imagefilledrectangle($image, 50, 50, 250, 100, $red);

// Label “Sale!”
imagestring($image, 5, 120, 70, "Sale!", $black);

// Papar
imagepng($image);
imagedestroy($image);
?>
