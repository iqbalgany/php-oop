<?php 

class Produk {
    public $judul , 
           $penulis,
           $penerbit;
           
    protected $diskon = 0;

    private $harga;

    public function __construct($judul, $penulis, $penerbit, $harga ) {
            $this->judul = $judul;
            $this->penerbit = $penerbit;
            $this->penulis = $penulis;
            $this->harga = $harga;
        }

    public function getLable() {
        return "$this->penulis, $this->judul";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})" ;
        return $str;
        }

        
   

     public function getHarga()  {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
       parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);

       $this->jmlHalaman = $jmlHalaman;
    }

    #[Override]
    public function getInfoProduk()
    {
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
    parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);

    $this->waktuMain = $waktuMain;
    }

    #[Override]
    public function getInfoProduk() {
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam";
        return $str;
    }

     public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

   

}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLable()} (Rp30.000.000)";
        return $str;
        }
    }
        
    $produk2 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 900000,  900);
    $produk3 = new Game("Spiderman", "Sam Raymi", "Sony Picture", 100, 2);

    echo $produk2->getInfoProduk();
    echo "<br>";
    echo $produk3->getInfoProduk();
    echo "<hr>";

    $produk3->setDiskon(90);
    echo $produk3->getHarga();
        

?>