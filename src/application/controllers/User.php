<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    public function index()
    {
        $this->load->model('user_model');

         $users['users'] = $this->user_model->get_all();
         $this->load->view('users_view',$users);
    }


    public function get_user_by_id(int $id){
        $this->load->model('user_model');
        $user['user'] = $this->user_model->get_by_id($id);
        $this->load->view('users_view',$user);
    }
}
