<?php
class Page extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->view("public/header");
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
        $config['per_page'] = 5;

        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '<li>First Page</li>';
        $config['first_tag_open'] = '<li class="firstlink">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '<li>Last Page</li>';
        $config['last_tag_open'] = '<li class="lastlink">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '<li>Next Page</li>';
        $config['next_tag_open'] = '<li class="nextlink">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '<li>Prev Page</li>';
        $config['prev_tag_open'] = '<li class="prevlink">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="curlink">';
        $config['cur_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="numlink">';
        $config['num_tag_close'] = '</li>';

        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['data']= $this->Muser->getList($config['per_page'], $start);
        $this->load->view("page_view", $data);

        $this->load->view("public/footer");
    }
}
