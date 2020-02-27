<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->data['page_title'] = 'Body Content';
        $this->load->model('LoginAuthenticationModal');

	}

    public function index(){
        $this->logged_in();
        $this->data['mx']=null;
        $this->render_users_template('Login/login', $this->data);
    }

    public function login()
    {
        $this->logged_in();

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() == TRUE) {
            $existingEmail = $this->LoginAuthenticationModal->checkemail($this->input->post('email'));
            if ($existingEmail == TRUE) {
                $login = $this->LoginAuthenticationModal->login($this->input->post('email'), $this->input->post('password'));
                if ($login) {
                    $login_session = array(
                        'id' => $login['user_id'],
                        'email' => $login['email'],
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($login_session);
                    redirect(base_url('ViewProfile'),'refresh');

                    $x=$this->session->userdata('email');
                    echo "<script>alert(".$x.")</script>";
                } else {
                    $this->data['errors'] = 'Incorrect username/password combination';
                    $this->index();
                }
            } else {
                $this->data['errors'] = 'Email does not exists';
                $this->index();
            }
        } 
        else {
            $this->index();
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login/'), 'refresh');
    }
    

}


?>