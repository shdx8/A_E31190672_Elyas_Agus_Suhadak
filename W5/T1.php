<?php 
  interface hitungLuas{
    public function luas();
  }

  class Persegi implements hitungLuas{
    private $sisi;
    public function __construct($sisi) {
      $this->sisi = $sisi;
    }
    public function luas(){
      return $this->sisi*$this->sisi;
    }
  }

  class Segi3 implements hitungLuas{
    private $a;
    private $t;
    public function __construct($a, $t) {
      $this->a = $a;
      $this->t = $t;
    }
    public function luas(){
      return ($this->a * $this->t)/2;
    }
  }

  class Lingkaran implements hitungLuas {
    private $r;
    public function __construct($r) {
      $this->r = $r;
    }
    public function luas(){
      return 3.14 * $this->r * $this->r;
    }
  }



  $persegi = new Persegi(8);
  $segi3 = new Segi3(8,9);
  $O = new Lingkaran(8);
  
  echo "luas persegi: ".$persegi->luas()."<br>";
  echo "luas segitiga: ".$segi3->luas()."<br>";
  echo "luas lingkaran: ".$O->luas();
?>