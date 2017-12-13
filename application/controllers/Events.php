<?php
class Events extends CI_Controller {
		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
		}

		public function index()
		{
      $this->_data['subview'] = 'dontlogin/index_view';
      $this->_data['titlePage'] = 'Sự kiện';
      $this->load->view('main.php', $this->_data);
		}

    public function event($id = '', $content = '', $author = '')
		{
      $this->_data['subview'] = 'dontlogin/event_view';
      $this->_data['titlePage'] = 'Trang chủ';
      $this->_data['value'] = $id;
      $this->_data['content'] = $content;
      $this->_data['tacgia'] = $author;
      $this->load->view('main.php', $this->_data);
		}
}
