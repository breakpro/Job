<?php

class Signup_model extends CI_Model{

    public function register($data){
     
        $this->db->insert('users',$data);
        if($this->db->affected_rows()){
            return true; 
        }else{
            return false;
        }
    }
}


?>