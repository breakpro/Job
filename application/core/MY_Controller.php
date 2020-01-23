<?php 
//Custome replacement of the CI_Controller class
class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
}

class Admin_Controller extends MY_Controller 
{
	// permissions for the users
	var $permission = array();

	public function __construct() 
	{
		parent::__construct();

		// $group_data = array();
		// if(empty($this->session->userdata('logged_in'))) {//if the user hasn't logged in, this means its log in is somewhere else
		// 	$session_data = array('logged_in' => FALSE);
		// 	$this->session->set_userdata($session_data);//it will send the logged_id==false value 
		// }
		// else {
		// 	$user_id = $this->session->userdata('id');
		// 	$this->load->model('model_groups');//load model_groups 
		// 	$group_data = $this->model_groups->getUserGroupByUserId($user_id);//fetch all the group information
			
		// 	$this->data['user_permission'] = unserialize($group_data['permission']);
		// 	$this->permission = unserialize($group_data['permission']);
		// }
	}

	// public function logged_in()
	// {
	// 	$session_data = $this->session->userdata();
	// 	if($session_data['logged_in'] == TRUE) {
	// 		redirect('dashboard', 'refresh');
	// 	}
	// }

	// public function not_logged_in()
	// {
	// 	$session_data = $this->session->userdata();
	// 	if($session_data['logged_in'] == FALSE) {
	// 		redirect('auth/login', 'refresh');
	// 	}
	// }

	public function render_template($page = null, $data = array())
	{
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/header_menu',$data);
		$this->load->view('templates/side_menubar',$data);
		$this->load->view($page, $data);
		$this->load->view('templates/footer',$data);
	}


	public function render_users_template($page = null, $data = array())
	{
		$this->load->view('templates_user/header',$data);
		$this->load->view('templates_user/header_menu', $data);
		$this->load->view($page, $data);
		$this->load->view('templates_user/footer', $data);
	}

	public function render_new_template($page = null, $data = array())
	{
		$this->load->view('templates_user/header',$data);
		$this->load->view('templates_user/header_new', $data);
		$this->load->view($page, $data);
		$this->load->view('templates_user/footer', $data);
	}


	

	
	
}