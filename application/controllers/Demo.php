<?php
class Demo extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->library("session");
    }

    public function index(){
            $data=array(
                "username" => "Kaito",
                "email" => "codephp2013@gmail.com",
                "website" => "freetuts.net",
                "gender" => "Male",
            );
            $this->session->set_userdata($data);
            $this->session->set_flashdata("flash_open", "Khoi tao session thanh cong");
            redirect(base_url()."demo/index2");
        }

        public function index2(){
             echo $this->session->flashdata("flash_open");
             $user=$this->session->userdata("username");
             $level=$this->session->userdata("level");
             $email=$this->session->userdata("email");
             echo "Username: $user, Email: $email, Level: $level";
             $data=$this->session->all_data();
             echo "<pre>";
             print_r($data);
             echo "</pre>";
    }

    // public function index(){
    //     $data=array(
    //         "username" => "Kaito",
    //         "email" => "codephp2013@gmail.com",
    //         "website" => "freetuts.net",
    //         "gender" => "Male",
    //     );
    //     $this->session->set_userdata($data);
    //     redirect(base_url()."demo/index2");
    // }
    //
    // public function index2(){
    //         $user=$this->session->userdata("username");
    //         $level=$this->session->userdata("level");
    //         $email=$this->session->userdata("email");
    //         echo "Username: $user, Email: $email, Level: $level";
    //   }

    // public function index2(){
    //     $user=$this->session->userdata("username");
    //     $level=$this->session->userdata("level");
    //     $email=$this->session->userdata("email");
    //     echo "Username: $user, Email: $email, Level: $level";
    //     $data=$this->session->all_userdata();
    //     echo "<pre>";
    //     print_r($data);
    //     echo "</pre>";
    // }

    public function index3(){
             $this->session->sess_destroy();
             echo "Huy session thanh cong.";
         }
}
