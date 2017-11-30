<?php
// class Muser extends CI_Model{
//     public function __construct(){
//         parent::__construct();
//         $this->load->database();
//     }
//
//     public function listUser(){
//         $this->db->select("id, username, level");
//         $query=$this->db->get("user");
//         return $query->result_array();
//     }
//
//     public function countAll(){
//         return $this->db->count_all("user");
//     }
//
//     public function getList($total, $start){
//        $this->db->limit($total, $start);
//        $query=$this->db->get("user");
//        return $query->result_array();
// }
// }

class Muser extends CI_Model{
    protected $_table = 'user';
    public function __construct() {
        parent::__construct();
    }

    public function getList(){
        $this->db->select('id, username, level');
        return $this->db->get($this->_table)->result_array();
    }

   public function countAll(){
        return $this->db->count_all($this->_table);
    }

   public function deleteUser($id){
       $this->db->where("id", $id);
       return $this->db->delete($this->_table);
    }

    public function insertUser($data_insert){
        $this->db->insert($this->_table,$data_insert);
    }

    public function getUserById($id){
        $this->db->where("id", $id);
        return $this->db->get($this->_table)->row_array();
    }

    public function getUserByUsername($uid){
        $this->db->where("username", $uid);
        return $this->db->get($this->_table)->row_array();
    }

    public function updateUser($data_update, $id){
        $this->db->where("id", $id);
        $this->db->update($this->_table, $data_update);
    }

    // public function logIn($user){
    //     $this->session->set_userdata($this->Muser->getUserByUsername($user))
    //     if ($this->session->has_userdata('username')) {
    //         return TRUE;
    //     } else {
    //         return FALSE;
    //     }
    // }

    public function logOut(){
        if ($this->session->sess_destroy()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function userData(){
        return $sess_userdata = $this->session->userdata();
    }

    public function checkLogin($uid, $pwd){
         $exe_query = "";
         if(($uid != "") && ($pwd != "")){
             $exe_query = $this->db->query('SELECT * FROM user WHERE username = "'.$uid.'" AND password = "'.$pwd.'"');
         }
         if($exe_query->num_rows() == 1){
             return TRUE;
         }else{
             return FALSE;
         }
     }

   public function checkUsername($user, $id=""){
        if($id != ""){
            $this->db->where("id !=", $id);
        }
        $this->db->where('username',$user);
        $query=$this->db->get($this->_table);
        if($query->num_rows() > 0){
            return FALSE;
        }else{
            return TRUE;
        }
    }

    // public function checkEmail($email,$id=""){
    //     if($id != ""){
    //         $this->db->where("id !=", $id);
    //     }
    //     $this->db->where('email',$email);
    //     $query=$this->db->get($this->_table);
    //     if($query->num_rows() > 0){
    //         return FALSE;
    //     }else{
    //         return TRUE;
    //     }
    // }
}
