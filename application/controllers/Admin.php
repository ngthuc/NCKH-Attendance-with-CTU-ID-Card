<?php
class Admin extends CI_Controller {

	  protected $_data = array('div_alert' => 'container','type' => null,'url' => null,'content' => null);

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
	      $this->_data['url'] = base_url();
		}

		public function index()
		{
      $this->_data['subview'] = 'admin/admin_view';
      $this->_data['titlePage'] = 'Trang quản trị';
      $this->load->view('main.php', $this->_data);
		}

		public function event()
		{
      $this->_data['subview'] = 'admin/admin_view';
      $this->_data['titlePage'] = 'Quản lý sự kiện';
      $this->load->view('main.php', $this->_data);
		}

		public function attendance()
		{
      $this->_data['subview'] = 'admin/admin_view';
      $this->_data['titlePage'] = 'Quản lý điểm danh';
      $this->load->view('main.php', $this->_data);
		}

		public function analytics()
		{
      $this->_data['subview'] = 'admin/admin_view';
      $this->_data['titlePage'] = 'Báo cáo - Thống kê';
      $this->load->view('main.php', $this->_data);
		}

		public function organizations()
		{
      $this->_data['subview'] = 'admin/admin_view';
      $this->_data['titlePage'] = 'Quản lý tổ chức và đơn vị';
      $this->load->view('main.php', $this->_data);
		}

		public function permissions()
		{
      $this->_data['subview'] = 'admin/admin_view';
      $this->_data['titlePage'] = 'Quản lý phân quyền và quyền truy cập';
      $this->load->view('main.php', $this->_data);
		}

		public function user_account()
		{
      $this->_data['subview'] = 'admin/admin_view';
      $this->_data['titlePage'] = 'Quản lý tài khoản và người dùng';
      $this->load->view('main.php', $this->_data);
		}

		public function device_api()
		{
      $this->_data['subview'] = 'admin/admin_view';
      $this->_data['titlePage'] = 'Quản lý thiết bị và API';
      $this->load->view('main.php', $this->_data);
		}
}
