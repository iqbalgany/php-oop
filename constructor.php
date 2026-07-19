<?php 

class Produk {
    public $judul = 'Naruto', 
           $penulis = 'Narji',
           $penerbit = 'Narji',
           $harga;

    public function getLable() {
        return "$this->penulis, $this->judul";
    }

    public function __construct($judul = "Naruto", $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }
    
}

$produk3 = new Produk("Naruto", "Yuzuki", "Shonen", 8000);

$produk4 = new Produk("Spiderman", "Sam Raymi", "Sony Picture", 8000000);

echo "Komik: " . $produk3->getLable();
echo "<br>";
echo "Movie: " . $produk4->getLable();



?>