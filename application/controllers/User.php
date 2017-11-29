<?php
class User extends CI_Controller {

    protected $_data;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
       $this->_data['subview'] = 'user/index_view';
       $this->_data['titlePage'] = 'List All User';
       $this->_data['userName'] = $sess_userdata;

       $this->_data['info'] = $this->Muser->getList();
       $this->_data['total_user'] = $this->Muser->countAll();
       $this->load->view('user/main.php', $this->_data);
   }

   // public function check_login($uid, $pwd) {
   //      $id=$this->uri->segment(3);
   //      if ($this->Muser->checkLogin($uid, $pwd) == FALSE) {
   //          $this->form_validation->set_message("check_login", "Your username or password has been wrong, please try again!");
   //          return FALSE;
   //      } else {
   //          return TRUE;
   //      }
   //  }

   public function check_user($user, $id) {
        $id=$this->uri->segment(3);
        if ($this->Muser->checkUsername($user, $id) == FALSE) {
            $this->form_validation->set_message("check_user", "Your username has been registed, please try again!");
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // public function check_email($email,$id) {
    //
    //     $id=$this->uri->segment(3);
    //     if ($this->Muser->checkEmail($email, $id) == FALSE) {
    //         $this->form_validation->set_message("check_email", "Your email has been registed, please try again!");
    //         return FALSE;
    //     } else {
    //         return TRUE;
    //     }
    // }

   public function del($id = null) {
       if($id) {
         $this->_data['subview'] = 'user/alert_view';
         $this->_data['titlePage'] = 'Alert Active User';

         // $this->db->where("id", $id);
         // if($this->db->delete("user")){
         if($this->Muser->deleteUser($id)){
         $this->_data['alert'] = array(
              "type" => "success",
              "url" => base_url("user"),
              "content"    => "Delete Success",
            );
         $this->load->view('user/main.php', $this->_data);
         } else {
           $this->_data['alert'] = array(
                 "type" => "warning",
                 "url" => base_url("user"),
                 "content"    => "Delete Fail",
             );
             $this->load->view('user/main.php', $this->_data);
         }
       } else {
         $this->_data['subview'] = 'user/alert_view';
         $this->_data['titlePage'] = 'Alert Active User';

         $this->_data['alert'] = null;
         $this->load->view('user/main.php', $this->_data);
       }
   }

   public function add() {
       $this->_data['titlePage'] = 'Add A User';
       $this->_data['subview'] = 'user/add_view';
       $this->form_validation->set_rules("username", "Username", "required|trim|min_length[4]|xss_clean|callback_check_user");
       $this->form_validation->set_rules("password", "Password", "required|xss_clean|trim|min_length[4]|callback_check_user");
       $this->form_validation->set_rules("password2", "Re-Password", "required|matches[password]|xss_clean|trim|min_length[4]|callback_check_user");
       // $this->form_validation->set_rules("email", "Email", "required|trim|xss_clean|valid_email|callback_check_email");

       if ($this->form_validation->run() == TRUE) {
           $data_insert = array(
               "username" => $this->input->post("username"),
               "password" => $this->input->post("password"),
               // "email"    => $this->input->post("email"),
               "level"    => $this->input->post("level"),
           );
           $this->Muser->insertUser($data_insert);
           $this->_data['subview'] = 'user/alert_view';
           $this->_data['titlePage'] = 'Alert Active User';

           $this->_data['alert'] = array(
                "type" => "success",
                "url" => base_url("user"),
                "content"    => "Add Success",
              );
       }
       $this->load->view('user/main.php', $this->_data);
   }

    public function edit($id) {
        $this->_data['titlePage'] = "Edit A User";
        $this->_data['subview'] = "user/edit_view";
        $this->_data['info'] = $this->Muser->getUserById($id);
        $this->form_validation->set_rules("username", "Username", "required|xss_clean|trim|min_length[4]|callback_check_user");
        $this->form_validation->set_rules("password", "Password", "required|xss_clean|trim|min_length[4]|callback_check_user");
        $this->form_validation->set_rules("password2", "Re-Password", "required|matches[password]|xss_clean|trim|min_length[4]|callback_check_user");
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
            $this->_data['subview'] = 'user/alert_view';
            $this->_data['titlePage'] = 'Alert Active User';

            $this->_data['alert'] = array(
                 "type" => "success",
                 "url" => base_url("user"),
                 "content"    => "Edit Success",
               );
        }
        $this->load->view('user/main.php', $this->_data);
    }

    public function login($act = null) {
       if($act){
         $this->_data['subview'] = 'user/alert_view';
         $this->_data['titlePage'] = 'Alert Active Login';
         // $this->form_validation->set_rules("username", "Username", "required|xss_clean|trim|callback_check_user");
         // $this->form_validation->set_rules("password", "Password", "required|xss_clean|trim|callback_check_user");
         // if ($this->form_validation->run() == TRUE) {
         if ($this->Muser->checkLogin($_POST['username'], $_POST['password']) == TRUE) {
           $user_data = $this->Muser->getUser($_POST['username']);
           $this->session->set_userdata($user_data);
           $sess_userdata = $this->session->userdata();
           $this->_data['alert'] = array(
               "type" => "success",
               "url" => base_url("user"),
               "content"    => "Login Success ".$_POST['username']." ".$_POST['password'],
             );
         } else {
           $this->_data['alert'] = array(
               "type" => "warning",
               "url" => base_url("user/login"),
               "content"    => "Login Fail",
             );
         }
         $this->load->view('user/main.php', $this->_data);
       } else {
         $this->_data['subview'] = 'user/login_form';
         $this->_data['titlePage'] = 'Login';
         $this->load->view('user/main.php', $this->_data);
       }
   }

   public function logout() {
         $this->_data['subview'] = 'user/alert_view';
         $this->_data['titlePage'] = 'Alert Active Logout';
         $this->session->sess_destroy();
         $this->_data['alert'] = array(
              "type" => "success",
              "url" => base_url("user"),
              "content"    => "Logout Success ",
            );
         $this->load->view('user/main.php', $this->_data);
  }
}
