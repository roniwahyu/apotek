<?php
class Md_Login extends CI_Model
{
  public function __construct() {
     parent::__construct();

     //load database library
     $this->load->database();
 }
    function login_check($table,$where)
    {
        # code...
        return $this->db->get_where($table,$where);
    }

    // function get_level($table,$where)
    // {
    //     # code...
    //     $this->db->select("hak_akses");
    //     $this->db->where($where);
    //     $query=$this->db->get($table);

    //     $level = $query->result_array();

    //     return $level[0]['level'];
    // }
}
?>
