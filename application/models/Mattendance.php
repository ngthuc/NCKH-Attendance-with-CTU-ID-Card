<?php
class Mattendance extends CI_Model{
    protected $_table = 'attendance';

    public function __construct(){
        parent::__construct();
    }

    public function getList($where = null, $id = null){
        $this->db->select('*');
        if ($where && $id) {
            $this->db->where($where, $id);
        }
        return $this->db->get($this->_table)->result_array();
    }

    public function countAll(){
        return $this->db->count_all($this->_table);
    }

    public function getByEvent($id){
        $this->db->where("idEvent", $id);
        return $this->db->get($this->_table)->result_array();
    }
}
