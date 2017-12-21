<?php
class Organizations extends CI_Controller {

	  protected $_data = array('div_alert' => 'container','type' => null,'url' => null,'content' => null);

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
	      $this->_data['url'] = base_url();
		}

		public function index()
		{
      echo 'This is organizations page';
		}

    public function org($id = '')
		{
			$getOrg = $this->Morg->getOrgById($id);
      if ($getOrg['parent'] == $getOrg['id']) {
				$parent['name'] = '<i>Không có cấp cao hơn tại cơ sở</i>';
        $parent['id'] = $getOrg['id'];
      } else $parent = $this->Morg->getOrgById($getOrg['parent']);

			$this->_data['subview'] = 'dontlogin/org_detail_view';
			$this->_data['titlePage'] = 'Chi tiết tổ chức';

      $this->_data['name'] = $getOrg['name'];
			$this->_data['parent_name'] = $parent['name'];
			$this->_data['parent_id'] = $parent['id'];
			$this->_data['description'] = $getOrg['description'];
			$this->load->view('main.php', $this->_data);
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
