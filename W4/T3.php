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
    return $this->merk.$this->tipe;
  }
  public function beliHandphone(){
    return $this->getMerkTipe();
  }
  public function mem(){
    return $this->tipe.$this->memory;
  }
  public function spek(){
    return "Merk:   $this->merk<br>
            Tipe:   $this->tipe<br>
            memory: $this->memory<br>";
  }
}

$hp = new Handphone();
$hp->merk = "Xiaomi";
$hp->tipe = "Redmi Note 9 Pro";
$hp->memory = "8GB";

echo $hp->spek();