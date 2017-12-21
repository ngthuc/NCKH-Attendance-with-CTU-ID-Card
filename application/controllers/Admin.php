<?php
class Admin extends CI_Controller {

	  protected $_data = array('div_alert' => 'container','type' => null,'url' => null,'content' => null);

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
	      $this->_data['url'] = base_url();
				$this->load->model('Mstaff');
				$this->load->model('Mstudent');
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
			$this->_data['content'] = $this->Mevent->getList();
      $this->load->view('main.php', $this->_data);
		}

		public function attendance($event = null)
		{
      if ($event) {
				$this->_data['subview'] = 'admin/attendance/attendance_detail_view.php';
				$this->_data['titlePage'] = 'Chi tiết điểm danh';
	      $this->_data['idEvent'] = $event;
	      $this->load->view('main.php', $this->_data);
			} else {
				$this->_data['subview'] = 'admin/attendance/attendance_admin_view.php';
	      $this->_data['titlePage'] = 'Quản lý điểm danh';
	      $this->load->view('main.php', $this->_data);
			}
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
			$this->_data['content'] = $this->Morg->getList();
      $this->load->view('main.php', $this->_data);
		}

		public function permissions($do = null, $name = null)
		{
      if ($do == 'custom') {
				$this->_data['subview'] = 'admin/permission/custom_permission_view.php';
				$this->_data['titlePage'] = 'Tùy biến phân quyền';
				$this->_data['role'] = $this->Mrole->getRoleByName($name);
	      $this->_data['count'] = $this->Mrole->countAllByName($name);
	      $this->load->view('main.php', $this->_data);
			} else if ($do == 'add') {
				$this->_data['subview'] = 'admin/permission/add_permission_view.php';
				$this->_data['titlePage'] = 'Thêm nhóm quyền';
	      $this->load->view('main.php', $this->_data);
			} else {
				$this->_data['subview'] = 'admin/permission/permission_admin_view.php';
	      $this->_data['titlePage'] = 'Quản lý phân quyền và quyền truy cập';
				$this->_data['content'] = $this->Mrole->getList();
	      $this->load->view('main.php', $this->_data);
			}
		}

		public function admin_account()
		{
      $this->_data['subview'] = 'admin/account/index_account_view.php';
      $this->_data['titlePage'] = 'Quản lý tài khoản và người dùng';
      $this->load->view('main.php', $this->_data);
		}

		public function rfid_account()
		{
			$this->_data['subview'] = 'admin/account/rfid_admin_view.php';
			$this->_data['titlePage'] = 'Quản lý thẻ RFID';
			$this->_data['content'] = $this->Mrfid->getList();
			$this->load->view('main.php', $this->_data);
		}

		public function rfid_detail($id = null, $isStudent = null)
		{
			$this->_data['subview'] = 'admin/account/rfid_detail_view.php';
			$this->_data['titlePage'] = 'Quản lý thẻ RFID - Chi tiết định danh';
			if ($isStudent == 'student') {
				$this->_data['typeID'] = 'studentID';
				$this->_data['typeName'] = 'Student';
				$this->_data['content'] = $this->Mstudent->getById($id);
			} else {
				$this->_data['typeID'] = 'staffID';
				$this->_data['typeName'] = 'Staff';
				$this->_data['content'] = $this->Mstaff->getById($id);
			}
			$this->load->view('main.php', $this->_data);
		}

		public function user_account()
		{
      $this->_data['subview'] = 'admin/account/account_admin_view.php';
      $this->_data['titlePage'] = 'Quản lý tài khoản';
			$this->_data['content'] = $this->Maccount->getList();
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
