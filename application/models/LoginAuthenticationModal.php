<?php


class LoginAuthenticationModal extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
//    check if email exists

    public function checkemail($email)
    {
        if($email){
            $sql = 'SELECT * FROM users WHERE email = ?';
            $query = $this->db->query($sql,array($email));
            $result=$query->num_rows();
            return($result == 1) ? true :false;
        }
        return false;
    }
//    check if email and the password belong together

    public function login($email,$password){
        if($email && $password ){
            $sql='SELECT * FROM users WHERE email =?';
            $query=$this->db->query($sql,array($email));
            if ($query->num_rows()==1){
                $result=$query->row_array();
                if(password_verify($password,$result['password'])){
                    return $result;
                }
                else {
                    return false;
                }
            }
            else{
                return false;
            }
        }
    }
}

