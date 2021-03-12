<?php 

class Laptop {
     public $pemilik="pemilik",
            $merk="merk";

    public function hidupkan_laptop($pemilik,$merk) {
        return "Hidupkan laptop $merk punya $pemilik";
    }

    public function matikan_laptop($pemilik,$merk) {
        return "Matikan laptop $merk punya $pemilik";
    }
     
   public function restart_laptop($pemilik,$merk) {
        return "Matikan laptop $merk punya $pemilik";
        return "Hidupkan laptop $merk punya $pemilik";
    }
     

   
}

$laptopA= new Laptop();
$laptopB= new Laptop();
$laptopC= new Laptop();


echo $laptopA->hidupkan_laptop("A", "ASUS");
echo "<br>";
echo $laptopB->matikan_laptop("B", "Acer");
echo "<br>";
echo $laptopC->restart_laptop("C", "Lenovo").". ".$laptopC->restart_laptop("C", "Lenovo");