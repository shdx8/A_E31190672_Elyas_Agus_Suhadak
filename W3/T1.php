<?php

class Calculator{
    private $x,$y,$z;


    function tambah($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $hasil = $this->x + $this->y + $this->z;
        return $hasil;
    }
    function kurang($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $hasil = $this->x - $this->y - $this->z;
        return $hasil;
    }
    function bagi($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $hasil = $this->x / $this->y / $this->z;
        return $hasil;
    }
    function kali($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $hasil = $this->x * $this->y * $this->z;
        return $hasil;
    }
}

$z = new Calculator();

echo "2+9+5= ".$z->tambah(2,9,5);
echo "<br>";
echo "2-9-5= ".$z->kurang(2,9,5);
echo "<br>";
echo "2/9/5= ".$z->bagi(2,9,5);
echo "<br>";
echo "2*9*5= ".$z->kali(2,9,5);