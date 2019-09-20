<?php
//kode membuat gambar
session_start();
//membuat session php harus diatas
header("Content-type : image/png");
$_SESSION["Captcha"]="";
//menunjukkan ukuran tinggi,lebar,tinggi
$gbr = imagecreate(180, 40);
//warna background
imagecolorallocate($gbr, 167, 218, 239);
$grey = imagecolorallocate($gbr, 128, 128, 128);
$black = imagecolorallocate($gbr, 0, 0, 0);
//definisi font yg digunakan
$font ='arial.TTF';
for($i=0;$i<=5;$i++){
$nomor=rand(0, 9);
$_SESSION["Captcha"].=$nomor;
$sudut=rand(-25, 25);
imagettftext($gbr, 20, $sudut, 8+15*$i, 25, $black, $font, $nomor);
imagettftext($gbr, 20, $sudut, 9+15*$i, 26, $grey, $font, $nomor);
}
	imagepng($gbr);
	imagedestroy($gbr);
?>