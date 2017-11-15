<?php
class Menu extends CI_Controller {

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
        $this->load->helper("url");
        $this->load->view("public/header");
		}

		public function index()
		{
				$this->load->view("menu_bar");
        $this->load->view("public/footer");
		}
}
