<?php

interface hitungLuas {
  public function hitungLuas();
}

class Persegi implements hitungLuas {

  public $sisi;
  public function __construct($sisi) {
    $this->sisi = $sisi;
  }

  public function hitungLuas()
  {
    return $this->sisi * $this->sisi;
  }
}
class Segitiga implements hitungLuas {

  private $alas;
  private $tinggi;

  public function __construct($alas, $tinggi) {
    $this->alas = $alas;
    $this->tinggi = $tinggi;
  }

  public function hitungLuas()
  {
    return 0.5 * $this->alas * $this->tinggi;
  }
}
class Lingkaran implements hitungLuas {

  public $jari;

  public function __construct($jari) {
    $this->jari = $jari;
  }

  public function hitungLuas()
  {
    return 3.14 * $this->jari * $this->jari;
  }
}
echo "Luas lingkaran: ";
$lingkaran = new Lingkaran(31);
echo $lingkaran->hitungLuas();
echo "<br>";

echo "Luas persegi: ";
$persegi = new Persegi(31);
echo $persegi->hitungLuas();
echo "<br>";

echo "Luas segitiga: ";
$segitiga = new Segitiga(31, 30);
echo $segitiga->hitungLuas();
echo "<br>";