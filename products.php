<?php
header("Content-Type: image/png");

// Gambar 300x100
$image = imagecreate(300, 100);

// Warna
$yellow = imagecolorallocate($image, 255, 255, 0);
$black = imagecolorallocate($image, 0, 0, 0);

// Teks
imagestring($image, 5, 70, 40, "100 Items Sold", $black);

// Papar
imagepng($image);
imagedestroy($image);
?>
