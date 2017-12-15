<?php
class Events extends CI_Controller {

	  protected $_data = array('div_alert' => 'container','type' => null,'url' => null,'content' => null);

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
	      $this->_data['url'] = base_url();
		}

		public function index()
		{
      $this->_data['subview'] = 'dontlogin/index_view';
      $this->_data['titlePage'] = 'Sự kiện';
      $this->load->view('main.php', $this->_data);
		}

    public function event($id = null, $personal = null)
		{
      if ($id) {
				$this->_data['subview'] = 'dontlogin/event_detail_view';
				$this->_data['titlePage'] = 'Chi tiết sự kiện';
				$this->_data['personalJoined'] = $personal;
	      $this->_data['isJoined'] = 'NO';
			} else {
				$this->_data['subview'] = 'alert/load_alert_view';
        $this->_data['titlePage'] = 'Cảnh báo';
        $this->_data['type'] = 'warning';
        $this->_data['url'] = base_url('events');
        $this->_data['content'] = 'Access Denied';
			}
      $this->load->view('main.php', $this->_data);
		}

		public function org($id = null)
		{
      if ($id) {
				$this->_data['subview'] = 'dontlogin/events_org_view';
	      $this->_data['titlePage'] = 'Chi tiết sự kiện theo tổ chức';
	      $this->_data['value'] = $id;
	      $this->_data['content'] = $content;
	      $this->_data['tacgia'] = $author;
			} else {
				$this->_data['subview'] = 'alert/load_alert_view';
        $this->_data['titlePage'] = 'Cảnh báo';
        $this->_data['type'] = 'warning';
        $this->_data['url'] = base_url('events');
        $this->_data['content'] = 'Access Denied';
			}
      $this->load->view('main.php', $this->_data);
		}
}
