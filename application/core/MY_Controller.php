<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$user_id = $this->session->userdata('admin_id');

	}

		public function is_loggedIn()
   		 {
        $check_login = $this->session->userdata('admin_id');

        if (!$check_login == True)
        {

        	return redirect('admin/login');
        }
        // else
        // {
        // 	return redirect('admin/login');
        // }
    	}

        public function is_user_loggedIn()
         {
        $check_login = $this->session->userdata('user_id');

        if (!$check_login == True)
        {

            return redirect('login');
        }
        // else
        // {
        //  return redirect('admin/login');
        // }
        }
}











 ?>