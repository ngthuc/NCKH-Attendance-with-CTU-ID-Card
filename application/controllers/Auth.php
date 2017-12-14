<?php
class Auth extends CI_Controller {

    protected $_data = array('div_alert' => 'container','type' => null,'url' => null,'content' => null);

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
        $this->_data['url'] = base_url();
		}

		public function index()
		{
        $this->_data['subview'] = 'alert/load_alert_view';
        $this->_data['titlePage'] = 'Xác thực';
        $this->_data['type'] = 'warning';
        $this->_data['content'] = 'Access Denied';
        $this->load->view('main.php', $this->_data);
		}

    public function login($goback = null, $subgoback = null){
        $this->_data['subview'] = 'alert/load_alert_view';
        $this->_data['titlePage'] = 'Đăng nhập';
        $this->_data['type'] = 'success';
        if ($goback) {
          // $this->_data['url'] = base_url($goback.'/'.$subgoback);
          $this->_data['url'] = base_url($goback.'/'.$subgoback);
        } else $this->_data['url'] = base_url();
        $this->_data['content'] = 'Đăng nhập thành công';
        $this->load->view('main.php', $this->_data);
    }

    public function logout()
		{
        $this->_data['subview'] = 'alert/load_alert_view';
        $this->_data['titlePage'] = 'Đăng xuất';
        $this->_data['type'] = 'success';
        $this->_data['content'] = 'Đăng xuất thành công';
        $this->load->view('main.php', $this->_data);
		}
}
