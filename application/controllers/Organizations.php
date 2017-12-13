<?php
class Organizations extends CI_Controller {
		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
		}

		public function index()
		{
      echo 'This is organizations page';
		}

    public function org($id = '')
		{
      echo 'This is '.$id.' organization page';
		}
}
