<?php
class Mahasiswa_model extends CI_Model{
	function getAll(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('grup', 'user.grup = grup.id_grup');
		$query = $this->db->get();
		return $query;
	}

	function input_data($data, $table) {
		$this->db->insert($table,$data);
	}
}
?>