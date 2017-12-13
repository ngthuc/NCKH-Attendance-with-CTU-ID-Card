<?php
class Index extends CI_Controller {
		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
		}

		public function index()
		{
      $this->_data['subview'] = 'index_view';
      $this->_data['titlePage'] = 'Trang chủ';
      $this->_data['urlFormPage'] = 'home/query';
      $this->load->view('main.php', $this->_data);
		}
}
