<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resetPassword extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Body Content';
        $this->load->model('resetPasswordModal');

    }

    public function index()
    {
        $this->data['mx'] = null;
        $this->logged_in();
        $this->render_new_template('Login/resetPassword', $this->data);
    }
    function UserNumber(){
        $number_session=array(
            'number' => $this->input->post('number')
        );
        $this->session->set_userdata($number_session);
        redirect(base_url('resetPassword'),'refresh');
    }
    public function reset_password()
    {
        $resetNumber=$this->session->userdata('number');
        $resetpassword=$this->input->post('confirmpassword');

        $data=array(
            'cost' => 12
        );
        $hashedResetpassword=password_hash($resetpassword, PASSWORD_BCRYPT, $data);

        $Reset=$this->resetPasswordModal->reset($resetNumber,$hashedResetpassword);
    if($Reset){
        redirect(base_url('ViewProfile'),'refresh');
        $this->session->sess_destroy();
    }
    }
}