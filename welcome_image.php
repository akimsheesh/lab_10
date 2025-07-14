<?php
header("Content-Type: image/png");

// Buat gambar 400x100 piksel
$image = imagecreate(400, 100);

// Warna
$blue = imagecolorallocate($image, 0, 0, 255);   // Latar biru
$white = imagecolorallocate($image, 255, 255, 255); // Teks putih

// Tulis teks
imagestring($image, 5, 50, 40, "Welcome to Our Shop!", $white);

// Papar gambar
imagepng($image);
imagedestroy($image);
?>
