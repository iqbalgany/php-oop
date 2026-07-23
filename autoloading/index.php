<?php

require_once "App/init.php";

$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 900000,  900);
$produk2 = new Game("Spiderman", "Sam Raymi", "Sony Picture", 100, 2);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

echo '<hr>';

new Coba();
