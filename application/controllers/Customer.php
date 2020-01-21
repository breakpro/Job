<?php
class Customer extends Admin_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->data['page_title'] = 'Body Content';

	}

    public function index(){
        $this->data['mx']=null;
        $this->render_users_template('templates_user/body_content', $this->data);
    }

}


?>