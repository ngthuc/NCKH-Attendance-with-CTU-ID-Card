<?php
// class User extends CI_Controller{
//     public function __construct(){
//         parent::__construct();
//         // $this->load->library("database");
//         $this->load->database();
//     // }
//
//     public function index(){
//         $query=$this->db->get("user");
//         $data=$query->result_array();
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//     }
//
//     public function index(){
//         $query=$this->db->get("user");
//         $data=$query->row_array();
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//     }
//
//     public function index(){
//         $this->db->select("id, username, level");
//         $query=$this->db->get("user");
//         $data=$query->result_array();
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//       }
//
//     public function index(){
//         $this->db->select("id, username, level");
//         $this->db->order_by("id", "desc");
//         $query=$this->db->get("user");
//         $data=$query->result_array();
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//       }
//
//     public function index(){
//         $this->db->select("id, username, level");
//         $this->db->order_by("id", "desc");
//         $this->db->limit(2, 0);
//         $query=$this->db->get("user");
//         $data=$query->result_array();
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//       }
//
//     public function index(){
//     //     // $this->db->select("id, username, level");
//     //     // $this->db->order_by("id", "desc");
//     //     // $this->db->limit(7, 0);
//     //     // $this->db->where("level", "2");
//     //     // $this->db->select_min("id");
//     //     $query=$this->db->get("user");
//     //     $data=$query->result_array();
//     //     echo "<pre>";
//     //     print_r($data);
//     //     echo "</pre>";
//     //   }
//     //
//     // public function index2(){
//     //     $data=array(
//     //         "username" => "kaito",
//     //         "password" => "1212445",
//     //         "level"    => "2",
//     //     );
//     //     $this->db->insert("user", $data);
//     //   }
//     //
//     // public function index3(){
//     //     $data=array(
//     //         "username" => "kaito",
//     //         "password" => "kaito123",
//     //         "level"    => "1",
//     //     );
//     //     $this->db->where("id", "2");
//     //     if($this->db->update("user", $data)){
//     //         echo "Update Thanh cong";
//     //     }else{
//     //         echo "Update That bai";
//     //     }
//     //   }
//     //
//     // public function index4($id){
//     //       $this->db->where("id", $id);
//     //       if($this->db->delete("user")){
//     //           echo "Xoa thanh cong";
//     //       }else{
//     //           echo "Xoa that bai";
//     //       }
//     //   }
//     //
//     // public function index5(){
//     //     $this->load->model("Muser");
//     //     $data['data']=$this->Muser->listUser();
//     //     $this->load->view("user/list_view", $data);
//     //   }
// }
    class User extends CI_Controller {

    protected $_data;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    // public function index() {
    //     $this->_data['subview'] = 'user/index_view';
    //     $this->_data['titlePage'] = 'List All User';
    //     $this->_data['info'] = $this->Muser->getList();
    //     $this->_data['total_user'] = $this->Muser->countAll();
    //     $this->load->view('user/main.php', $this->_data);
    // }

    public function index() {
       $this->_data['subview'] = 'user/index_view';
       $this->_data['titlePage'] = 'List All User';
       $this->load->model('Muser');

       $this->_data['info'] = $this->Muser->getList();
       $this->_data['total_user'] = $this->Muser->countAll();
       $this->load->view('user/main.php', $this->_data);
   }

   public function del($id) {
        $this->load->model('Muser');
        $this->db->where("id", $id);
        if($this->db->delete("user")){
           echo "Xoa thanh cong";
        } else{
           echo "Xoa that bai";
        }
        // $this->Muser->deleteUser($id);
        $this->session->set_flashdata("flash_mess", "Delete Success");
        redirect(base_url() . "user");
 }
}
