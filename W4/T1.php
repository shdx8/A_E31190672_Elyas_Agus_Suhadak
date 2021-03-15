<?php 
    class mobilLengkap{

        public function nontonTv(){
            return "menampilkan Tv dihidupkan, Tv Mencari Chanel, Tv Menampilkan gambar";
        }
    }

    class MobilBmw extends MobilLengkap {
        public function hidupkanMobil(){
            $txt = "menyalakan mobil<br>";
            return $txt . $this->nontonTv();
        }
        public function matikanMobil(){
            return "mematikan mobil";
        }
        public function ubahGigi(){
            return "mengubah gigi";
        }
    }

        $bmw = new MobilBmw();
        echo $bmw->hidupkanMobil()." & ".$bmw->ubahGigi();


?>