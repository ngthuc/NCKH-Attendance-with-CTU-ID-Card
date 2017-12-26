<?php
// API for a attentdance
class Attendance extends CI_Controller {

	  protected $_data = array('isCss' => null,'div_alert' => 'container','type' => null,'url' => null,'content' => null);

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
	      $this->_data['url'] = base_url();
		}

		public function index()
		{
				$this->_data['type'] = 'warning';
				$this->_data['content'] = 'API Điểm danh - Access Denied';
				$this->load->view('alert/load_alert_view',$this->_data);
		}

		public function posts()
		{
				if (!empty($_POST['APIkey'])) {
					$getKey = hash('sha256', $_POST['APIkey']);
					$existKey = $this->Mkey->getByKey($getKey);
					$keyOrigin = $existKey['encriptApi'];
					if ($keyOrigin == $getKey) {
							$json = $_POST['data'];
							foreach ($json as $key => $row) {
								# code...
							}
							echo 'OK';
					}
				} else {
					echo "Access Denied";
				}
		}
}
