<?php

use Dom\Document;

class Home_controller extends CI_Controller{

    public function index(){
        $data['hello'] = "Hello, World!";
        $data['posts'] =  $this->Home_model->get_testdata();
        print_r($data['posts']); // This will print the first segment of the URI
        $this->load->view('templates/header');
        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');   
    }
}