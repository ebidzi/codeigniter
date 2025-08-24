<?php

class Home_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_testdata(){
        $query = $this->db->get('test_db');
        return $query->result_array();
    }

    public function get_singledata($id){
        $query = $this->db->get_where('test_db', array('id' => $id));
        return $query->row_array();
    }
}