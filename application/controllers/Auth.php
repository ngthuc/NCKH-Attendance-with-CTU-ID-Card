<?php
class Auth extends CI_Controller {

    protected $_data = array('div_alert' => 'container','type' => null,'url' => null,'content' => null);

    protected $_uid = '';

    protected $_pwd = '';

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
        $this->_data['url'] = base_url();
		}

		public function index($dir = null, $goback = null, $param1 = null, $param2 = null, $param3 = null)
		{
        $this->_data['subview'] = 'alert/load_alert_view';
        $this->_data['titlePage'] = 'Xác thực';
        $this->_data['type'] = 'warning';
        if ($dir && $goback) {
          $this->_data['url'] = base_url($goback.'/'.$param1.'/'.$param2.'/'.$param3);
        } else $this->_data['url'] = base_url();
        $this->_data['content'] = 'Access Denied';
        $this->load->view('main.php', $this->_data);
		}

    public function login(){
        if (isset($_POST['loginSubmit'])) {
          $this->_uid = $_POST['uid'];
          $this->_pwd = $_POST['pwd'];
        }
        $this->_data['subview'] = 'alert/load_alert_view';
        $this->_data['titlePage'] = 'Đăng nhập';
        $this->_data['type'] = 'success';
        $this->_data['url'] = $_GET['next'];
        $this->_data['content'] = 'Đăng nhập thành công với tài khoản '.$this->_uid.' và mật khẩu '.$this->_pwd;
        $this->load->view('main.php', $this->_data);
    }

    public function logout()
		{
        $this->_data['subview'] = 'alert/load_alert_view';
        $this->_data['titlePage'] = 'Đăng xuất';
        $this->_data['type'] = 'success';
        $this->_data['url'] = $_GET['next'];
        $this->_data['content'] = 'Đăng xuất thành công';
        $this->load->view('main.php', $this->_data);
		}
}
