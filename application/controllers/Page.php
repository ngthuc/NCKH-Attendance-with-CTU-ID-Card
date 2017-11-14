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
        echo $this->pagination->create_links();
    }

    public function index2(){
        $this->load->model("Muser");
        $config['total_rows'] = $this->Muser->countAll();
        $config['base_url'] = base_url()."page/index2";
        $config['per_page'] = 4;

        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['data']= $this->Muser->getList($config['per_page'], $start);
        $this->load->view("page_view", $data);

        $this->load->library('pagination', $config);
        echo $this->pagination->create_links();
    }
}
