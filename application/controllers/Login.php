<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

			public function index()
				{
					redirect('admin/login');
					
					$this->load->view('member/login');
				}


}