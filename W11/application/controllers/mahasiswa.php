<?php
defined('BASEPATH') or exit('No direct script access allowed');
class mahasiswa extends CI_Controller{
  function __construct(){
      parent::__construct();
      $this->load->model('mahasiswa_mod');
  }
  public function index(){
      $data['user'] = $this->mahasiswa_mod->getAll()->result();
      $this->load->view('crud/home',$data);
  }

  public function create(){
    $this->load->view('crud/create');
  }

  public function input(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $grup     = $this->input->post('grup');

    $data = array(
      'username' => $username,
      'password' => $password,
      'grup' => $grup,
    );

    $this->mahasiswa_mod->input_data($data,'user');
    redirect('mahasiswa/index');
  }
}