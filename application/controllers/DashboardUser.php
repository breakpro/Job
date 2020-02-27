<?php 

class DashboardUser extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
        $this->data['page_title'] = 'Dashboard';
	}

	public function index()
	{
        $this->not_logged_in();
        $this->render_new_template('DashboardUser/card', $this->data);
	}
}