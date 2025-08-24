<?php

use Dom\Document;

class Home_controller extends CI_Controller{

    public function index($param = null){
       if ($param == null){
            $page = "Home";
            $data['hello'] = "Hello World!";
            $this->load->model('Home_model');
            $data['posts'] = $this->Home_model->get_testdata();
            $this->load->view('templates/header');
            $this->load->view('pages/'. $page, $data);
            $this->load->view('templates/footer');
        } else {
            echo "Parameter passed: " . $param; $data['hello'] = "Hello, World!";
            $data['posts'] =  $this->Home_model->get_singledata($param);
            print_r($data['posts']);
            $page = "Single";
            $this->load->view('templates/header');
            $this->load->view('pages/' . $page, $data);
            $this->load->view('templates/footer');   
       }
    }

    public function test(){
        echo "This is a test method.";
    }
}