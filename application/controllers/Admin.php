<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct()
	{
        parent::__construct();
		//$this->is_loggedIn();
		
		$this->load->model('Admin_model','adminm');	
		
		

		//ob_start();

    }
	public function error404()
	{
		$this->output->set_status_header('404'); 
		$this->load->view('member/404');
	}

	public function index()
	{
		//$this->is_loggedIn();
		//$this->is_loggedIn();
		
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run('user_login')) { //if validation passes
			//Success
			$username = $this->input->post('email');
			$password = $this->input->post('password');

		

			$login_valid = $this->adminm->user_validate($username, $password);
			
			if($login_valid) {
				
			$this->session->set_userdata('admin_id', $username);
				return redirect('admin/dashboard');
				

				//credentials valid, login user.
			} else {
				$this->session->set_flashdata('login_failed','Invalid Email or Password.');
				return redirect('admin/login');
			}
		} else {
			
			$this->load->view('member/login');
			
		}
	}


	public function login()
	{

		//$this->is_loggedIn();
		//$this->is_loggedIn();
		
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run('user_login')) { //if validation passes
			//Success
			$username = $this->input->post('email');
			$password = $this->input->post('password');

		

			$login_valid = $this->adminm->user_validate($username, $password);
			
			if($login_valid) {
				
			$this->session->set_userdata('admin_id', $username);
				return redirect('admin/dashboard');
				

				//credentials valid, login user.
			} else {
				$this->session->set_flashdata('login_failed','Invalid Email or Password.');
				return redirect('admin/login');
			}
		} else {
			
			$this->load->view('member/login');
			
		}
	}



	public function dashboard()
	{

		$this->is_loggedIn();
		
		$this->load->view('member/dashboard');
	}
	public function all_orders()
	{
		$this->is_loggedIn();
		
		$this->load->view('member/all_orders');
	}

	public function add_product()
	{
		$this->is_loggedIn();
		
		$this->load->view('member/add_product');
	}


	public function add_category()
	{
		$this->is_loggedIn();
		
		$this->load->view('member/add_category');
	}

		public function logout()
	{
		$this->is_loggedIn();
		
		 $this->session->unset_userdata('admin_id');
        $this->session->sess_destroy();
        return redirect('admin/login');
	}

}












 ?>