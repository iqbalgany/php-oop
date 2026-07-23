<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function getLable()
    {
        return "$this->penulis, $this->judul";
    }

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLable()} (Rp30.000.000)";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Yuzuki", "Shonen", 8000);
$produk2 = new Produk("Spiderman", "Sam Raymi", "Sony Picture", 8000000);

echo "Komik: " . $produk1->getLable();
echo "<br>";
echo "Movie: " . $produk2->getLable();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
