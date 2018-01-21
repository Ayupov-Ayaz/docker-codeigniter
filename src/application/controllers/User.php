<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    private $users = ['users' => ['Ayaz','Roma','Gagarin','Makar'] ];

    public function index()
    {
        $users = $this->get_all_users();
        $this->load->view('all_users_view',$users);
    }
    
    public function get_all_users(){
        return $this->users;
    }
}
