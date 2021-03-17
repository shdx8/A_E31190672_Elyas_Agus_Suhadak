<?php 
class kode extends CI_Controller {
    public function hello($var) {
        if(isset($var)){
            switch(strtolower($var)){
                case "php":
                    $this->load->view('phpview');
                    break;
                case "python":
                    $this->load->view('pythonview');
                    break;
                case "cpp":
                    $this->load->view('cppview');
                    break;
                case "java":
                    $this->load->view('javaview');
                    break;
                default:
                    echo "input URI salah";
              }
    } else {
      echo 'Input URI salah';
    }
  }
}

class kode1 extends CI_Controller {
    public function index() {
        $this->load->view('phpview');
    }
    public function hello_python() {
        $this->load->view('pythonview');
    }
    public function hello_cpp() {
        $this->load->view('cppview');
    }
    public function hello_java() {
        $this->load->view('javaview');
    }

    public function _remap($var){
        if (isset($var)){
            switch (strtolower($var)){
                case 'phyton':
                    $this->hello_python();
                    break;
                case 'cpp':
                    $this->hello_cpp();
                    break;
                case 'java':
                    $this->hello_java();
                    break;
                default:
                $this->index();
            }
        }else{
            $this->index();
        }
    }
    
}

