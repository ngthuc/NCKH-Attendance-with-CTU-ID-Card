<?php
class Mauth extends CI_Model{
  /* Gán tên bảng cần xử lý*/
  private $_name = 'account';

  function __construct(){
        parent::__construct();
    }

  /**
   * Get all users in DB
   * @param null
   * @return array
   */
  function a_fCheckUser( $a_UserInfo ){
    $a_User	=	$this->db->select()
              ->where('username', $a_UserInfo['username'])
              ->where('password', $a_UserInfo['password'])
              ->get($this->_name)
              ->row_array();
    if(count($a_User) >0){
      return $a_User;
    } else {
      return false;
    }
  }
}
