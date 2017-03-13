<?php 
 
class m_auth extends CI_Model {
    
    
    public function login($username,$password) {
        $sql = "SELECT * FROM user WHERE  username='".$username."' AND password='".$password."' ";
        $query = $this->db->query($sql);
   
        return $query->num_rows();
             
    }

    
    public function data_login($username,$password) {
        $sql = "SELECT * FROM user WHERE  username='".$username."' AND password='".$password."' ";
        $query = $this->db->query($sql);

        return $query->row();
    }



}
 