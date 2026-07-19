<?php 

class Produk {
    public $judul = 'Naruto', 
           $penulis = 'Narji',
           $harga;


    public function sayHello() {
        return "Hello World";
    }

    public function getLable() {
        return "$this->penulis, $this->judul";
    }
}

// $produk3 = new Produk();
// $produk3->judul = 'Shinta';
// $produk3->penulis = 'Leri';
// $produk3->harga = 9000;

// $produk4 = new Produk();
// $produk4->judul = 'Spiderman';
// $produk4->penulis = 'Sam raymi';
// $produk4->harga = 7000000;

// echo "Komik: " . $produk3->getLable();
// echo "<br>";
// echo "Movie: " . $produk4->getLable();



?>