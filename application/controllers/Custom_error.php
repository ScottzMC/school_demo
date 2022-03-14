<?php 

    class Custom_error extends CI_Controller{
        // Custom 404 Exception
        public function index(){
            $this->output->set_status_header('404');
            $this->load->view('custom404');
        }
    }

?>