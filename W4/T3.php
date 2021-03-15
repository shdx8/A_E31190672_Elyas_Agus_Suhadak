<?php

class Tablet {
  public $merk;
  public $tipe;
  public $memory;

  protected function getMerk(){
    return $this->merk;
  }
}

class Handphone extends Tablet {
  private function getMerkTipe() {
    return "$this->merk $this->tipe";
  }
  public function beliHandphone(){
    return "Beli handphone " . $this->getMerkTipe();
  }
  public function cekmemory(){
    return "$this->tipe punya memory sebesar $this->memory GB";
  }
  public function Spek(){
    return "Merk: $this->merk<br>
    Tipe: $this->tipe<br>
    memory: $this->memory GB<br>";
  }
}

$hp = new Handphone();
$hp->merk = "Xiaomi";
$hp->tipe = "Redmi Note 9 Pro";
$hp->memory = 8;

echo $hp->Spek();