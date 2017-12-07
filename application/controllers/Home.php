<?php
class Home extends CI_Controller {
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

    public function query()
    {
      $this->_data['subview'] = 'process_query';
      $this->_data['titlePage'] = 'Trang chủ';
      $this->_data['result'] = $_POST['query'];
      $this->load->view('main.php', $this->_data);
    }

    public function table()
    {
      $this->_data['subview'] = 'table_view';
      $this->_data['titlePage'] = 'Bảng tính';
      $this->_data['idTable'] = 'student-table';
      
      $this->load->view('main.php', $this->_data);
    }
}
