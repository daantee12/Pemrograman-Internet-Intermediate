<?php

class Fashion {

    public  $merk, $warna, $model, $tipe, $ukuran, $harga;

    public function __construct( $merk = "merk", $warna = "warna", $model = "model", $tipe = "tipe", $ukuran = "ukuran", $harga = 0) {

        $this->merk = $merk;
        $this->warna = $warna;
        $this->model = $model;
        $this->tipe = $tipe;
        $this->ukuran = $ukuran;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->warna, $this->model";

    }

    public function getTipeFashion() {

        $str = "{$this->merk} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class ATK {

    public  $nama, $merk, $berat, $ukuran, $warna, $harga; 

    public function __construct( $nama = "nama", $merk = "merk", $berat = "berat", $ukuran = "ukuran", $warna= "warna", $harga = 0) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->berat = $berat;
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->merk, $this->berat, $this->ukuran, $this->warna";

    }

    public function getInfoATK() {

        $str = "{$this->nama} , {$this->getlabel()} , Rp. {$this->harga} ";

        return $str;
    }

}

class BajuAnak extends Fashion {

    public function getInfoFashion() {
        $str = "BajuAnak   =  {$this->getlabel()} , {$this->merk} , {$this->tipe} , {$this->ukuran} ,  Rp. {$this->harga} ";
        return $str; 
    }

}

class BajuRemaja extends Fashion {

    public function getInfoFashion() {
        $str = "BajuRemaja = {$this->getlabel()} , {$this->merk} , {$this->tipe} , {$this->ukuran} ,  Rp. {$this->harga} ";
        return $str; 
    }

}

class BukuGambar extends ATK {

    public function getInfoATK() {
        $str = "BukuGambar = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Bulpen extends ATK {

    public function getInfoATK() {
        $str = "Bulpen = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class CetakInfoFashion {

    public function cetak(Fashion $fashion){
        $str = "{$fashion->merk} {$fashion->getlabel()} , Rp. {$fashion->harga} ";
        return $str;
    }

}

class CetakInfoATK {

    public function cetak(ATK $ATK){
        $str = "{$ATK->merk} {$ATK->getlabel()} (Rp. {$ATK->harga})";
        return $str;
    }

}

$fashion1 = new BajuAnak("Uniqlo", "Cream", "Crop", "Remaja", "L",  200000);
$fashion2 = new BajuAnak("Zara", "Mocca", "Oversize", "Dewasa", "XL",  300000);
$fashion3 = new BajuRemaja("zara", "Putih", "Kulot", "Lansia", "XL", 400000);
$fashion4 = new BajuRemaja("Eiger", "Hitam", "Cargo", "Bayi", "M", 500000);

$ATK1 = new BukuGambar("Pororo", "Sidu", "250 g", "A3", "Merah", 50000);
$ATK2 = new BukuGambar("Beatman", "Segitiga", "300 g", "A4", "Biru", 100000);
$ATK3 = new Bulpen("Pulpen Kantor", "Joyko", "100 g", "15 cm", "Hitam", 30000);
$ATK4 = new Bulpen("Pulpen Merah", "Standard", "120 gr", "20 cm", "Hijau", 50000);

echo $fashion1->getInfoFashion();
echo "<br>";
echo $fashion2->getInfoFashion();
echo "<br>";
echo $fashion3->getInfoFashion();
echo "<br>";
echo $fashion4->getInfoFashion();
echo "<hr>";
echo $ATK1->getInfoATK();
echo "<br>";
echo $ATK2->getInfoATK();
echo "<br>";
echo $ATK3->getInfoATK();
echo "<br>";
echo $ATK4->getInfoATK();
echo "<hr>";


?>