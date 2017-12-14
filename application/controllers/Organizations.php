<?php
class Organizations extends CI_Controller {
		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
        $this->load->model('Morg');
		}

		public function index()
		{
      echo 'This is organizations page';
		}

    public function org($id = '')
		{
      // echo 'This is '.$id.' organization page';
      $getOrg = $this->Morg->getOrgById($id);
      if ($getOrg['parent'] == $getOrg['id']) {
        $parent = '<i>Không có cấp cao hơn tại cơ sở</i>';
      } else $parent = $this->Morg->getOrgById($getOrg['parent']);
      echo 'Tên tổ chức: '.$getOrg['name'].'<br />Tổ chức quản lý: '.$parent['name'].'<br />Mô tả: '.$getOrg['description'].'<hr>';
		}

    public function test()
		{
      $json = json_decode(file_get_contents(base_url('api/gets/organizations/')));
      foreach ($json as $key => $obj) {
        $getParent = $this->Morg->getOrgById($obj->parent);
        if ($getParent['name'] == $obj->name) {
          $parent = '<i>Không có cấp cao hơn tại cơ sở</i>';
        } else $parent = $getParent['name'];
        echo 'Tên tổ chức: '.$obj->name.'<br />Tổ chức quản lý: '.$parent.'<br />Mô tả: '.$obj->description.'<hr>';
      }
		}
}
