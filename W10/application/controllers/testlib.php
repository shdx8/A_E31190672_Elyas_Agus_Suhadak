<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Teslib extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('table');
    $this->load->model('Mahasiswa_model');
  }
  public function index(){
    $data['mahasiswa'] = $this->Mahasiswa_model->get_data();
    $this->load->view('v_teslib', $data);
  }
}