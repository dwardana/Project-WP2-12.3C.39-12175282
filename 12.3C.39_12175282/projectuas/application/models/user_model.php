<?php
 
class User_model extends CI_Model 

{
  function __construct()
  
  {
    parent::__construct();
  }

  function SaveForm($form_data)
  
  {
    $this->db->insert('memberout', $form_data);
 
    if ($this->db->affected_rows() == '1')
    
    {
      return TRUE;
    }
 
    return FALSE;
  }
  
  public function logincheck($username, $password)

  {
    $this->db->select('*');
    $this->db->from('admin'); //admin is the table name
    $this->db->where('username', $username);
    $this->db->where('password',$password);

    return $this->db->get()->num_rows(); 
  }

  function list_table()
  
  {
    return $this->db->get('memberviewout');
  }

}
?>