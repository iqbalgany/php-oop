<?php 

class Produk {
    public $judul , 
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe) {
            $this->judul = $judul;
            $this->penerbit = $penerbit;
            $this->penulis = $penulis;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this-> waktuMain = $waktuMain;
            $this-> tipe = $tipe;
        }

    public function getLable() {
        return "$this->penulis, $this->judul";
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLable()} (Rp. {$this->harga})" ;
        if ($this->tipe == "Komik") {
            # code...
        $str .= " - {$this->jmlHalaman} Halaman";
            } else if ($this->tipe ==  "Game") {
        $str .= " ~ {$this->waktuMain} Jam";
                
        }   
        return $str;
    }

    
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLable()} (Rp30.000.000)";
        return $str;
        }   
    }
        
    $produk1 = new Produk("Naruto", "Yuzuki", "Shonen", 8000, 100, 0, "Komik");
    $produk2 = new Produk("Spiderman", "Sam Raymi", "Sony Picture", 8000000, 0, 1, "Game");

    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();
        

?>