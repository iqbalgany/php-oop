<?php

class Produk
{
    private $judul,
        $penulis,
        $harga,
        $penerbit,
        $diskon = 0;


    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->judul";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }
}

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);

        $this->jmlHalaman = $jmlHalaman;
    }

    #[Override]
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);

        $this->waktuMain = $waktuMain;
    }

    #[Override]
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp30.000.000)";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 900000,  900);
$produk2 = new Game("Spiderman", "Sam Raymi", "Sony Picture", 100, 2);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(90);
echo $produk2->getHarga();
echo "<hr>";


$produk3 = new Game("Oddisey", "Martin", "IMAX", 4000, 0);

$produk3->setJudul('Batman');

echo $produk3->getJudul();
echo "<hr>";
echo $produk3->getPenerbit();
