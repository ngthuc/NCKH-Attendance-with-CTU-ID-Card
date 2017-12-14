<?php
class API extends CI_Controller {
		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
				$this->load->model('Mapi');
		}

		public function index()
		{
				$data = array (
					'type' => 'warning',
					'url' => base_url(),
					'content' => 'Access Denied'
				);
				$this->load->view('alert/load_alert_view', $data);
		}

		public function gets($table = null, $where = null, $id = null)
		{
				if ($table == 'rfid' || $table == 'student' || $table == 'staff' || $table == 'attendance') {
					// Require API Key
					// if (isset($_POST['key'])) {
					// 	if ($_POST['key'])
					// }
					if ($where && $id) {
						// Get table with select
						$result = $this->Mapi->getList($table,$where,$id);
						echo json_encode($result);
					} else {
						// Get table without where
						$result = $this->Mapi->getList($table);
						echo json_encode($result);
					}
				} else if ($table == 'event' || $table == 'organizations') {
					// Public API
					if ($where && $id) {
						// Get table with select
						$result = $this->Mapi->getList($table,$where,$id);
						echo json_encode($result);
					} else {
						// Get table without where
						$result = $this->Mapi->getList($table);
						echo json_encode($result);
					}
				} else {
					$data = array (
						'type' => 'warning',
						'url' => base_url(),
						'content' => 'Access Denied'
					);
					$this->load->view('alert/load_alert_view', $data);
				}
		}
}
