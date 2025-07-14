<?php
header("Content-Type: image/png");

// Gambar 400x100
$image = imagecreatetruecolor(400, 100);

// Warna
$gray = imagecolorallocate($image, 211, 211, 211);
$black = imagecolorallocate($image, 0, 0, 0);

// Latar
imagefilledrectangle($image, 0, 0, 400, 100, $gray);

// Font
$font = __DIR__ . "/OpenSans-Regular.ttf"; // Pastikan font ini wujud

// Ucapan
imagettftext($image, 20, 0, 50, 60, $black, $font, "Hello, User!");

// Papar
imagepng($image);
imagedestroy($image);
?>
