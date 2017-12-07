<?php
class Home extends CI_Controller {
		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
		}

		public function index()
		{
      $this->_data['subview'] = 'index_view';
      $this->_data['titlePage'] = 'Trang chủ';
      $this->_data['urlFormPage'] = 'home/search';
      $this->load->view('main.php', $this->_data);
		}

    public function search()
    {
      echo $_POST['query'];
    }

    public function table()
    {
      $this->_data['subview'] = 'table_view';
      $this->_data['titlePage'] = 'Bảng tính';
      $this->load->view('main.php', $this->_data);
    }
}
