<?php

class Users extends CI_Controller{

    public function index(){
      //  $data['title'] = 'Create Account';
        $this->load->view('pages/registered');
    }
}