<?php 
class Home extends CI_Controller{
    public function index(){
        // render ke views
        $this->load->view('home/index');
    }
}
?>