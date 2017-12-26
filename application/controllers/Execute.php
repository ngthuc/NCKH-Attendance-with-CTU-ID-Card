<?php
class Execute extends CI_Controller {

	  protected $_data = array('div_alert' => 'container','type' => null,'url' => null,'content' => null);

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
	      $this->_data['url'] = base_url();
        $this->load->model('Mevent');
				$this->load->model('Morg');
				$this->load->model('Mrfid');
				$this->load->model('Mstudent');
				$this->load->model('Mstaff');
				$this->load->model('Mdevice');
				$this->load->model('Mkey');
        $this->load->model('Mrole');
		}

    public function index(){
        echo 'Trang thực thi';
    }

    public function add_event(){
        if (isset($_POST['addNew'])) {
          $data['nameEvent'] = htmlspecialchars(addslashes($_POST['nameEvent']));
          $data['timeStart'] = $_POST['timeStart'];
          $data['timeEnd'] = $_POST['timeEnd'];
          $data['dateEvent'] = $_POST['dateEvent'];
          $data['locationEvent'] = htmlspecialchars(addslashes($_POST['locationEvent']));
          $data['descriptionEvent'] = htmlspecialchars(addslashes($_POST['descriptionEvent']));
          $data['userCreator'] = 'admin';
          $data['idOrg'] = $_POST['org'];

          $this->Mevent->insertEvent($data);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
	        $this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
	        $this->_data['url'] = base_url('admin/event');
	        $this->_data['content'] = 'Thêm mới thành công';
					$this->load->view('main.php', $this->_data);
        }
    }

    public function add_org(){
        if (isset($_POST['addNew'])) {
          if ($_POST['org'] == '#') {
            // Đây là tổ chức cha
            $count = $this->Morg->countAll();
            $data['parent'] = $count + 1;
          } else $data['parent'] = $_POST['org'];
          $data['text'] = htmlspecialchars(addslashes($_POST['name']));
          $data['description'] = htmlspecialchars(addslashes($_POST['description']));

          $this->Morg->insertOrg($data);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
	        $this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
	        $this->_data['url'] = base_url('admin/organizations');
	        $this->_data['content'] = 'Thêm mới thành công';
					$this->load->view('main.php', $this->_data);
        }
    }

		public function add_user(){
        // if (isset($_POST['addNew'])) {
        //   if ($_POST['org'] == '#') {
        //     // Đây là tổ chức cha
        //     $count = $this->Morg->countAll();
        //     $data['parent'] = $count + 1;
        //   } else $data['parent'] = $_POST['org'];
        //   $data['text'] = htmlspecialchars(addslashes($_POST['name']));
        //   $data['description'] = htmlspecialchars(addslashes($_POST['description']));
        //
        //   $this->Maccount->insertUser($data);

        // }
    }

		public function add_card(){
        if (isset($_POST['addNew'])) {
          $data['idCard'] = htmlspecialchars(addslashes($_POST['cid']));
					$data['personalID'] = htmlspecialchars(addslashes($_POST['pid']));
          $data['isStudent'] = $_POST['type'];

          $this->Mrfid->insertCard($data);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
	        $this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
	        $this->_data['url'] = base_url('admin/rfid_account');
	        $this->_data['content'] = 'Thêm mới thành công';
					$this->load->view('main.php', $this->_data);
        }
    }

		public function add_student(){
        if (isset($_POST['addNew'])) {
          $data['studentID'] = htmlspecialchars(addslashes($_POST['sid']));
					$data['lastNameStudent'] = htmlspecialchars(addslashes($_POST['lastName']));
					$data['firstNameStudent'] = htmlspecialchars(addslashes($_POST['firstName']));
          $data['idMajor'] = $_POST['major'];

          $this->Mstudent->insertStudent($data);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
	        $this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
	        $this->_data['url'] = base_url('admin/rfid_account');
	        $this->_data['content'] = 'Thêm mới thành công';
					$this->load->view('main.php', $this->_data);
        }
    }

		public function add_staff(){
        if (isset($_POST['addNew'])) {
          $data['staffID'] = htmlspecialchars(addslashes($_POST['sid']));
					$data['lastNameStaff'] = htmlspecialchars(addslashes($_POST['lastName']));
					$data['firstNameStaff'] = htmlspecialchars(addslashes($_POST['firstName']));
          $data['idDepartment'] = $_POST['department'];

          $this->Mstaff->insertStaff($data);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
	        $this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
	        $this->_data['url'] = base_url('admin/rfid_account');
	        $this->_data['content'] = 'Thêm mới thành công';
					$this->load->view('main.php', $this->_data);
        }
    }

		public function add_device(){
        if (isset($_POST['addNew'])) {
          $data['name'] = htmlspecialchars(addslashes($_POST['name']));
					if ($_POST['serialNumber']) {
						$data['serialnumber'] = htmlspecialchars(addslashes($_POST['serialNumber']));
					}
					$data['registerdate'] = date("Y-m-d");

          $this->Mdevice->insertDevice($data);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
	        $this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
	        $this->_data['url'] = base_url('admin/device_admin');
	        $this->_data['content'] = 'Thêm mới thành công';
					$this->load->view('main.php', $this->_data);
        }
    }

		public function add_api(){
        if (isset($_POST['addNew'])) {
          $data['encriptApi'] = hash('sha256', md5(htmlspecialchars(addslashes($_POST['key']))));

          $this->Mkey->insertKey($data);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
	        $this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
	        $this->_data['url'] = base_url('admin/api_admin');
	        $this->_data['content'] = 'Thêm mới thành công';
					$this->load->view('main.php', $this->_data);
        }
    }

		public function add_role(){
        if (isset($_POST['addNew'])) {
					$data['roleName'] = htmlspecialchars(addslashes($_POST['role']));
					$data['rolesGroup'] = implode(",",$_POST['add']);
					$data['roleDesc'] = htmlspecialchars(addslashes($_POST['mota']));

          $this->Mrole->insertRole($data);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
	        $this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
	        $this->_data['url'] = base_url('admin/permissions');
	        $this->_data['content'] = 'Thêm mới thành công';
					$this->load->view('main.php', $this->_data);
        }
    }

		public function put_role(){
        if (isset($_POST['putRole'])) {
					$data['roleName'] = htmlspecialchars(addslashes($_POST['role']));
					$role = $data['roleName'];
					if ($_POST['add']) {
						$data['rolesGroup'] = implode(",",$_POST['add']);
					}
					$data['roleDesc'] = htmlspecialchars(addslashes($_POST['mota']));

          $this->Mrole->updateRole($data,$role);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
	        $this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
	        $this->_data['url'] = base_url('admin/permissions');
	        $this->_data['content'] = 'Cập nhật thành công';
					$this->load->view('main.php', $this->_data);
        }
    }

		public function delete_role(){
					$role = $_POST['rolename'];

					$this->Mrole->deleteRole($role);
					echo 'Xóa thành công';
    }

		public function put_event(){
        if (isset($_POST['putEvent'])) {
					$id = htmlspecialchars(addslashes($_POST['idEvent']));
					$data['nameEvent'] = htmlspecialchars(addslashes($_POST['nameEvent']));
					$data['timeStart'] = htmlspecialchars(addslashes($_POST['timeStart']));
					$data['timeEnd'] = htmlspecialchars(addslashes($_POST['timeEnd']));
					$data['dateEvent'] = htmlspecialchars(addslashes($_POST['dateEvent']));
					$data['locationEvent'] = htmlspecialchars(addslashes($_POST['locationEvent']));
					$data['descriptionEvent'] = htmlspecialchars(addslashes($_POST['descriptionEvent']));
					$data['idOrg'] = htmlspecialchars(addslashes($_POST['org']));

          $this->Mevent->updateEvent($data,$id);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
	        $this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
	        $this->_data['url'] = base_url('admin/event');
	        $this->_data['content'] = 'Cập nhật thành công';
					$this->load->view('main.php', $this->_data);
        }
    }

		public function delete_event(){
					$id = $_POST['id'];

					$this->Mevent->deleteEvent($id);
					echo 'Xóa thành công';
    }

		public function delete_key(){
					$id = $_POST['id'];

					$this->Mkey->deleteKey($id);
					echo 'Xóa thành công';
    }

		public function lock_key(){
        if (isset($_POST['id'])) {
					$id = $_POST['id'];
					$data['statusApi'] = 0;

          $this->Mkey->updateKey($data,$id);
					// Thông báo
					echo 'Khóa thành công';
        }
    }

		public function unlock_key(){
        if (isset($_POST['id'])) {
					$id = $_POST['id'];
					$data['statusApi'] = 1;

          $this->Mkey->updateKey($data,$id);
					// Thông báo
					echo 'Mở khóa thành công';
        }
    }

		public function add_api_device(){
				if (isset($_POST['addKey'])) {
					$id = htmlspecialchars(addslashes($_POST['device']));
					$data['idApi'] = htmlspecialchars(addslashes($_POST['idApi']));

					$this->Mdevice->updateDevice($data,$id);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
					$this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
					$this->_data['url'] = base_url('admin/api_admin');
					$this->_data['content'] = 'Cập nhật thành công';
					$this->load->view('main.php', $this->_data);
				}
    }

		public function put_device(){
				if (isset($_POST['putdevice'])) {
					$id = htmlspecialchars(addslashes($_POST['id']));
					$data['name'] = htmlspecialchars(addslashes($_POST['name']));
					$data['serialnumber'] = htmlspecialchars(addslashes($_POST['serialNumber']));

					$this->Mdevice->updateDevice($data,$id);
					// Thông báo
					$this->_data['subview'] = 'alert/load_alert_view';
					$this->_data['titlePage'] = 'Thành công';
					$this->_data['type'] = 'success';
					$this->_data['url'] = base_url('admin/device_admin');
					$this->_data['content'] = 'Cập nhật thành công';
					$this->load->view('main.php', $this->_data);
				}
    }

		public function delete_device(){
					$id = $_POST['id'];

					$this->Mdevice->deleteDevice($id);
					echo 'Xóa thành công';
    }
}
