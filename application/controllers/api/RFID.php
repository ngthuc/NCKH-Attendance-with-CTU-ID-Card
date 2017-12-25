<?php
// API for a rfid card
class RFID extends CI_Controller {

	  protected $_data = array('isCss' => null,'div_alert' => 'container','type' => null,'url' => null,'content' => null);

		// Hàm khởi tạo
		function __construct() {
				// Gọi đến hàm khởi tạo của cha
				parent::__construct();
	      $this->_data['url'] = base_url();
		}

		public function index()
		{
				$request_method=$_SERVER["REQUEST_METHOD"];
        switch($request_method)
      	{
        		case 'GET':
        			// Retrive Products
              echo 'GET - '.$_GET['key-get'];
        			// if(!empty($_GET["product_id"]))
        			// {
        			// 	$product_id=intval($_GET["product_id"]);
        			// 	get_products($product_id);
        			// }
        			// else
        			// {
        			// 	get_products();
        			// }
        			break;
        		case 'POST':
        			// Insert Product
              echo 'POST - '.$_POST['key-post'].'<br />';
              $url = $_POST['data'];
              // $data = json_decode(file_get_contents($_POST['data']), TRUE);
              $data = json_decode(file_get_contents($url), TRUE);
              print_r($data);
              // print_r(json_decode(file_get_contents('http://sam.ctu.edu.vn/nckh/organizations/res/4'), TRUE));
              // echo $data;
        			// insert_product();
        			break;
        		case 'PUT':
        			// Update Product
              echo 'PUT - '.$_PUT['key-put'];
        			// $product_id=intval($_GET["product_id"]);
        			// update_product($product_id);
        			break;
        		case 'DELETE':
        			// Delete Product
              echo 'DELETE - '.$_DELETE['key-delete'];
        			// $product_id=intval($_GET["product_id"]);
        			// delete_product($product_id);
        			break;
        		default:
        			// Invalid Request Method
        			// header("HTTP/1.0 405 Method Not Allowed");
              $this->_data['type'] = 'warning';
      				$this->_data['content'] = 'API thẻ RFID - Access Denied';
      				$this->load->view('alert/load_alert_view',$this->_data);
        			break;
      	}
		}
}
