<?php
class itemProduk {
  public $nama, $warna, $ukuran;
}

class Topi extends itemProduk {
  private $model = "cap";
  
  public function getTopi(){
    $this->nama = "Adidas baseball 3 stripes cap";
    $this->warna = "White";
    $this->ukuran = "M";
    return "Nama topi: $this->nama<br>
            Ukuran: $this->ukuran<br>
            Model: $this->model<br>
            Warna: $this->warna<br>";
  }
}

class Celana extends itemProduk {
  private $model = "Jeans";
  private $tipe = "Regular Fit";
  
  public function getCelana(){
    $this->nama = "Levi'S 505 Regular Fit Timberwolf Sat Slub Wt ";
    $this->warna = "Khaki";
    $this->ukuran = "32";
    return "Nama topi: $this->nama<br>
            Ukuran: $this->ukuran<br>
            Model: $this->model<br>
            Tipe: $this->tipe<br>
            Warna: $this->warna<br>";
  }
}

class Baju extends itemProduk {
  private $tipe = "Flannel";
  
  public function getBaju(){
    $this->nama = "Vengoz flannel shirts";
    $this->warna = "Brown";
    $this->ukuran = "XL";
    return "Nama topi: $this->nama<br>
            Ukuran: $this->ukuran<br>
            Tipe: $this->tipe<br>
            Warna: $this->warna<br>";
  }
}

$topi = new Topi();
$celana = new Celana();
$baju = new Baju();


echo $topi->getTopi();
echo "<hr>";
echo $celana->getCelana();
echo "<hr>";
echo $baju->getBaju();

?>