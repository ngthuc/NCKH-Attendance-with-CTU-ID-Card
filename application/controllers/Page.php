<?php
class Page extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
    }

    public function index(){
        $this->load->model("Muser");
        $config['total_rows'] = $this->Muser->countAll();
        $config['base_url'] = base_url()."page/index";
        $config['per_page'] = 3;

        $this->load->library('pagination', $config);
        // $this->load->$pagination($config);
        echo $this->pagination->create_links();
    }
}
