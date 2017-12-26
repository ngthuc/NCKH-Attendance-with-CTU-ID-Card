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

          $this->Mevent->insertUser($data);

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

          $this->Morg->insertUser($data);

        }
    }
}
