<?php


class resetPasswordModal extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function reset($number,$password)
    {
        if($number && $password)
        {
            $sql = 'SELECT * FROM users WHERE phoneNo = '.$number;
            $query = $this->db->query($sql);
            $result=$query->num_rows();
            if($result == 1){
                $data=array(
                    'password'=>$password
                );
                $this->db->where('phoneNo', $number);
                $this->db->update('users',$data);
//                $sql = 'UPDATE users SET password = '.$password.' WHERE phoneNo='.$number;
//                $query=$this->db->query($sql);
                if($this->db->affected_rows()>0){
                    echo "<script>alert('password changed')</script>";
                    return true;
                }
            }
        }
    }
}