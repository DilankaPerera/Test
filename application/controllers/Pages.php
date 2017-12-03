<?php

class Pages extends CI_Controller {

    public function index()
    {

        $this->load->view('Pages/header');
        $this->load->view('Pages/index');
        $this->load->view('Pages/footer');
    }
}