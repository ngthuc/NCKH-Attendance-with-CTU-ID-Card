<?php
class GetAPI extends CI_Controller {



		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
		}

		public function index()
		{
				$this->load->view("api_view");
		}

		public function view_doc() {
        $this->_data['subview'] = 'read_document';
        $this->_data['titlePage'] = 'Document';
        $this->load->view('main.php', $this->_data);
    }
}
