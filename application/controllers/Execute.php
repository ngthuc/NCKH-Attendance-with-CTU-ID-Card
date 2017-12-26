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

        }
    }

		public function add_student(){
        if (isset($_POST['addNew'])) {
          $data['studentID'] = htmlspecialchars(addslashes($_POST['sid']));
					$data['lastNameStudent'] = htmlspecialchars(addslashes($_POST['lastName']));
					$data['firstNameStudent'] = htmlspecialchars(addslashes($_POST['firstName']));
          $data['idMajor'] = $_POST['major'];

          $this->Mstudent->insertStudent($data);

        }
    }

		public function add_staff(){
        if (isset($_POST['addNew'])) {
          $data['staffID'] = htmlspecialchars(addslashes($_POST['sid']));
					$data['lastNameStaff'] = htmlspecialchars(addslashes($_POST['lastName']));
					$data['firstNameStaff'] = htmlspecialchars(addslashes($_POST['firstName']));
          $data['idDepartment'] = $_POST['department'];

          $this->Mstaff->insertStaff($data);

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

        }
    }

		public function add_api(){
        if (isset($_POST['addNew'])) {
          $data['encriptApi'] = hash('sha256', md5(htmlspecialchars(addslashes($_POST['key']))));

          $this->Mkey->insertKey($data);

        }
    }
}
