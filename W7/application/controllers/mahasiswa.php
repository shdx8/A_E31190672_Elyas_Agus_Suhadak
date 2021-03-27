<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahsiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
    public function index(){
        $data['nama'] = "Elyas";
        $data['prodi'] = "MIF";
        $this->load->view('v_mahasiswa', $data);
    
    
    }
    public function profil(){
        echo "ini adalah method profil pada controller Mahasiswa";
    }
}