<?php
class Login extends Admin_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->data['page_title'] = 'Body Content';

	}

    public function index(){
        $this->data['mx']=null;
        $this->render_users_template('Login/login', $this->data);
    }

    public function auth(){
        redirect(base_url('customer'));
    }

}


?>