<?php 
class Hello extends CI_controller {
    public function index() {
        echo "<h2>Hello World CI!</h2>";
    
        $this->load->view('helloview');
    }
}


?>