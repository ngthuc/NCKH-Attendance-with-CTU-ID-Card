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
      $this->_data['subview'] = 'admin/event/events_admin_view.php';
      $this->_data['titlePage'] = 'Quản lý sự kiện';
      $this->load->view('main.php', $this->_data);
		}

		public function attendance()
		{
      $this->_data['subview'] = 'admin/attendance/attendance_admin_view.php';
      $this->_data['titlePage'] = 'Quản lý điểm danh';
      $this->load->view('main.php', $this->_data);
		}

		public function analytics()
		{
      $this->_data['subview'] = 'admin/report/report_admin_view.php';
      $this->_data['titlePage'] = 'Báo cáo - Thống kê';
      $this->load->view('main.php', $this->_data);
		}

		public function organizations()
		{
      $this->_data['subview'] = 'admin/org/org_admin_view.php';
      $this->_data['titlePage'] = 'Quản lý tổ chức và đơn vị';
      $this->load->view('main.php', $this->_data);
		}

		public function permissions($do = null, $id = null)
		{
      if ($do) {
				$this->_data['subview'] = 'admin/permission/custom_permission_view.php';
				$this->_data['titlePage'] = 'Quản lý phân quyền';
	      $this->_data['idRole'] = $id;
	      $this->load->view('main.php', $this->_data);
			} else {
				$this->_data['subview'] = 'admin/permission/permission_admin_view.php';
	      $this->_data['titlePage'] = 'Quản lý phân quyền và quyền truy cập';
	      $this->load->view('main.php', $this->_data);
			}
		}

		public function user_account()
		{
      $this->_data['subview'] = 'admin/account/account_admin_view.php';
      $this->_data['titlePage'] = 'Quản lý tài khoản và người dùng';
      $this->load->view('main.php', $this->_data);
		}

		public function device_api()
		{
      $this->_data['subview'] = 'admin/device/index_admin_view.php';
      $this->_data['titlePage'] = 'Quản lý thiết bị và API';
      $this->load->view('main.php', $this->_data);
		}

		public function device_admin()
		{
      $this->_data['subview'] = 'admin/device/devices_admin_view.php';
      $this->_data['titlePage'] = 'Quản lý thiết bị và API';
      $this->load->view('main.php', $this->_data);
		}

		public function api_admin()
		{
      $this->_data['subview'] = 'admin/device/api_admin_view.php';
      $this->_data['titlePage'] = 'Quản lý thiết bị và API';
      $this->load->view('main.php', $this->_data);
		}
}
