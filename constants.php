<?php 

// define('NAMA', 'Muhammad Iqbal Al Afgany');
// echo NAMA;

// echo '<br>';

// const UMUR = 23;
// echo UMUR;


// class Coba {
//     const NAMA = "Gany";
// }

// echo "<br>";

// echo Coba::NAMA;


// echo __LINE__;
// echo "<br>";
// echo __FILE__;


// function coba()  {
//     return __FUNCTION__;
// }

// echo coba();


class Coba {
    public $kelas;   

    public function __construct()
    {
        $this->kelas = __CLASS__;
    }
}

$obj = new Coba();

echo $obj->kelas;
?>