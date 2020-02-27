<?php
class Signup extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Body Content';

    }

    public function index(){
        $this->data['mx']=null;
        $this->logged_in();
        $this->render_users_template('Signup/Signup', $this->data);
    }

    public function auth(){
        redirect(base_url('customer'));
    }

}


?>