<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    private $users = ['users' => ['Ayaz','Roma','Gagarin','Makar'] ];

    public function index()
    {
        $users = $this->get_all_users();
        $this->load->view('users_view',$users);
    }

    public function get_all_users(){
        return $this->users;
    }

    public function get_user_by_id(int $id){

        $users = $this->get_all_users();

        $user['UserController'] = $users['users'][$id];

        $this->load->view('users_view', $user);
    }
}
