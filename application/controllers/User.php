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
//     // $data=array(
//     //     "username" => "kaito",
//     //     "password" => "1212445",
//     //     "level"    => "2",
//     // );
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

    public function index() {
       $this->_data['subview'] = 'user/index_view';
       $this->_data['titlePage'] = 'List All User';
       $this->load->model('Muser');

       $this->_data['info'] = $this->Muser->getList();
       $this->_data['total_user'] = $this->Muser->countAll();
       $this->load->view('user/main.php', $this->_data);
   }

   public function del($id = null) {
       if($id) {
         $this->_data['subview'] = 'alert/alert_view';
         $this->_data['titlePage'] = 'Alert Active User';

         $this->db->where("id", $id);
         if($this->db->delete("user")){
         $this->_data['alert'] = array(
              "type" => "success",
              "url" => base_url()."user",
              "content"    => "Delete Success",
            );
         $this->load->view('user/main.php', $this->_data);
         } else {
           $this->_data['alert'] = array(
                 "type" => "warning",
                 "url" => base_url() . "user",
                 "content"    => "Delete Fail",
             );
             $this->load->view('user/main.php', $this->_data['alert']);
         }
       } else {
         $this->_data['subview'] = 'alert/alert_view';
         $this->_data['titlePage'] = 'Alert Active User';

         $this->_data['alert'] = null;
         $this->load->view('user/main.php', $this->_data);
       }
   }

   public function add() {
       $this->_data['titlePage'] = 'Add A User';
       $this->_data['subview'] = 'user/add_view';

       $this->form_validation->set_rules("username", "Username", "required|xss_clean|trim|min_length[4]|callback_check_user");
       $this->form_validation->set_rules("password", "Password", "required|matches[password2]|trim|xss_clean");
       // $this->form_validation->set_rules("email", "Email", "required|trim|xss_clean|valid_email|callback_check_email");

       if ($this->form_validation->run() == TRUE) {
           $this->load->model("Muser");
           $data_insert = array(
               "username" => $this->input->post("username"),
               "password" => $this->input->post("password"),
               // "email"    => $this->input->post("email"),
               "level"    => $this->input->post("level"),
           );
           $this->Muser->insertUser($data_insert);
           $this->session->set_flashdata("flash_mess", "Added");
           redirect(base_url() . "user");
       }
       $this->load->view('user/main.php', $this->_data);
   }

   public function check_user($user, $id) {
        $this->load->model('Muser');
        $id=$this->uri->segment(3);
        if ($this->Muser->checkUsername($user, $id) == FALSE) {
            $this->form_validation->set_message("check_user", "Your username has been registed, please try again!");
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // public function check_email($email,$id) {
    //     $this->load->model('Muser');
    //     $id=$this->uri->segment(3);
    //     if ($this->Muser->checkEmail($email, $id) == FALSE) {
    //         $this->form_validation->set_message("check_email", "Your email has been registed, please try again!");
    //         return FALSE;
    //     } else {
    //         return TRUE;
    //     }
    // }

    public function edit($id) {
        $this->load->model('Muser');
        $this->_data['titlePage'] = "Edit A User";
        $this->_data['subview'] = "user/edit_view";

        $this->_data['info'] = $this->Muser->getUserById($id);
        $this->form_validation->set_rules("username", "Username", "required|trim|min_length[4]|callback_check_user");
        // $this->form_validation->set_rules("username", "Username", "required|xss_clean|trim|min_length[4]|callback_check_user");
        $this->form_validation->set_rules("password", "Password", "trim");
        // $this->form_validation->set_rules("password", "Password", "matches[password2]|trim|xss_clean");
        // $this->form_validation->set_rules("email", "Email", "required|trim|xss_clean|valid_email|callback_check_email");
        if ($this->form_validation->run() == TRUE) {
            $data_update = array(
                "username" => $this->input->post("username"),
                // "email" => $this->input->post("email"),
                "level" => $this->input->post("level"),
            );
            if ($this->input->post("password")) {
                $data_update['password'] = $this->input->post("password");
            }
            $this->Muser->updateUser($data_update, $id);
            $this->session->set_flashdata("flash_mess", "Update Success");
            redirect(base_url() . "user");
        }
        $this->load->view('user/main.php', $this->_data);
    }
}
