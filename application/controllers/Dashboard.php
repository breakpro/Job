<?php 

class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		// $this->not_logged_in();

		$this->data['page_title'] = 'Dashboard';
		
		// $this->load->model('model_products');
		// $this->load->model('model_orders');
		// $this->load->model('model_users');
		// $this->load->model('model_stores');
	}

	/* 
	* It only redirects to the manage category page
	* It passes the total product, total paid orders, total users, and total stores information
	into the frontend.
	*/
	public function index()
	{
		$this->data['total_products'] = 10;
		$this->data['total_paid_orders'] = 5;
		$this->data['total_users'] = 6;
		$this->data['total_stores'] = 9;

		$user_id = 1;
		// $is_admin = ($user_id == 1) ? true :false;

		$this->data['is_admin'] = true;
		$this->render_template('dashboard', $this->data);
	}
}