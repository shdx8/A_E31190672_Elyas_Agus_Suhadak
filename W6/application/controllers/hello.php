<?php 
class Hello extends CI_Controller {
    public function index() {
        echo "<h2>Hello World CI!</h2>";
    
        $this->load->view('helloview');
        // $this->load->model('hmod');        
        
    }
}


?>