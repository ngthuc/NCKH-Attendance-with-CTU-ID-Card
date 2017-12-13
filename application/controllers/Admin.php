<?php
class Admin extends CI_Controller {
		protected $_data;

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
				$this->_data['idTable'] = '';
		}

		public function index()
		{
      $this->_data['subview'] = 'index_view';
      $this->_data['titlePage'] = 'Trang chủ';
      $this->_data['urlFormPage'] = 'home/query';
      $this->load->view('main.php', $this->_data);
		}
}
