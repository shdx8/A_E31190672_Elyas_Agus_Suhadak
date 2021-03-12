<?php

class Calculator{
    private $x,$y,$z;


    function tambah($x,$y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x + $this->y;
        return $hasil;
    }
    function kurang($x,$y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x - $this->y;
        return $hasil;
    }
    function bagi($x,$y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x / $this->y;
        return $hasil;
    }
    function kali($x,$y){
        $this->x = $x;
        $this->y = $y;
        $hasil = $this->x * $this->y;
        return $hasil;
    }
}

$z = new Calculator();

echo $z->tambah("2","9");
echo "<br>";
echo $z->kurang("2","9");
echo "<br>";
echo $z->bagi("2","9");
echo "<br>";
echo $z->kali("2","9");

?>