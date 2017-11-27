<?php

class Home extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
    }

    public function index(){
        $data['subview'] = 'home/index_view';
        $data['title'] = 'Homepage';
        $this->load->view('home/main', $data);
    }
}
