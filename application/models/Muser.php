<?php
class Muser extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function listUser(){
        $json = json_decode(file_get_contents(base_url('user.json')));
        return $json;
    }

    // public function countAll(){
    //     return $this->db->count_all("user");
    // }
    //
    // public function getList($total, $start){
    //    $this->db->limit($total, $start);
    //    $query=$this->db->get("user");
    //    return $query->result_array();
    // }
}
