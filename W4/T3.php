<?php 
class Tablet{
    public $merk;
    private $camera;
    protected $memory='265GB';

    public function camera($item){
        $camera=$this-> camera=$item;
        return "dengan kualitas Kamera <b>".$camera."</b>";
    }
}
class handphone extends Tablet{
	private $handphone_baru;
	public function beli_handphone(){
	    $merk=$this -> merk;
		$memory=$this -> memory;
		$handphone_baru=$this -> handphone_baru = "Beli Hp Baru Merek <b>".$merk."</b> , dengan jumlah memory <b>".$memory."</b>";
        return $handphone_baru;
    }
}

$Hp=new handphone();
echo "<h1>Informasi : </h1>";
$Hp-> merk='iPhone';
$camera=$Hp-> camera('14 MP');
$test=$Hp-> beli_handphone();
echo $test.' '.$camera;
