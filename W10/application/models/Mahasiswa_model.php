<?php
class Mahasiswa_model extends CI_Model{
	public function get_data(){
		$data_mahasiswa = [
			['nama'=>'Elyas','prodi'=>'MIF'],
			['nama'=>'Ahmad Kurniawan','prodi'=>'TKK'],
			['nama'=>'Budi Sudarsono','prodi'=>'TIF']
		];
		return $data_mahasiswa;
	}
}
?>