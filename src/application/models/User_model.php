<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->limit(2);
        $query = $this->db->get('users');

        return $query->result_array();
    }

    public function get_by_id(int $id){
        $this->db->where('id = ' . $id);
        $query = $this->db->get('users');

        return $query->result_array();
    }
}