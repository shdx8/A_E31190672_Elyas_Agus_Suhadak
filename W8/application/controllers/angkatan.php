<?php
class angkatan extends CI_Controller{
  function __construct(){
      parent::__construct();
      $this->load->model('angkatan_mod');
  }
  public function index(){
      $data['angkatan'] = $this->angkatan_mod->get_data();
      $this->load->view('v_angkatan',$data);
  }
}