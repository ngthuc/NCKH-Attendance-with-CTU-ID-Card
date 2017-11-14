<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Hello extends CI_Controller {

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
		}

		public function index($id = 0, $message = '')
		{
				echo 'Freetuts.net ID='.$id.' AND message ='.$message;
		}

		public function other(){
        echo 'Freetuts.net Other Controller';
    }
}
