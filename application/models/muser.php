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

  // public function deleteUser($id){
  //      return $this->db->delete($this->_table);
  //  }
}
