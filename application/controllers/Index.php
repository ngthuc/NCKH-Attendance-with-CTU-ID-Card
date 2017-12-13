<?php
class Index extends CI_Controller {
    protected $_data;

    // Hàm khởi tạo
    function __construct() {
        // Gọi đến hàm khởi tạo của cha
        parent::__construct();
        $this->_data['idTable'] = '';
    }

		public function index()
		{
      $this->_data['subview'] = 'index/index_view';
      $this->_data['titlePage'] = 'Trang chủ';
      $this->load->view('main.php', $this->_data);
		}

    public function activity($id = '', $content = '', $author = '')
		{
      $this->_data['subview'] = 'index/activity_view';
      $this->_data['titlePage'] = 'Trang chủ';
      $this->_data['value'] = $id;
      $this->_data['content'] = $content;
      $this->_data['tacgia'] = $author;
      $this->load->view('main.php', $this->_data);
		}
}
