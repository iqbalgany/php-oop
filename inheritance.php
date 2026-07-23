<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain)
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLable()
    {
        return "$this->penulis, $this->judul";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk
{
    #[Override]
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " | {$this->getLable()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    #[Override]
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLable()} (Rp. {$this->harga}) ~ {$this->waktuMain} Halaman";
        return $str;
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

$produk1 = new Produk("Naruto", "Yuzuki", "Shonen", 8000, 100, 0);
$produk2 = new Game("Spiderman", "Sam Raymi", "Sony Picture", 8000000, 0, 1);
$produk3 = new Komik("Spiderman", "Sam Raymi", "Sony Picture", 8000000, 0, 1);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
