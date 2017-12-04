<?php

class Pages extends CI_Controller {

    public function index($page='index'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
        $data['title']=ucfirst($page);
        $this->load->view('pages/'.$page,$data);
    }

}