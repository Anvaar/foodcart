<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
	{
        parent::__construct();
		//$this->is_loggedIn();
		
		$this->load->model('User_model','userm');	
		$this->load->library('encryption');
		

		//ob_start();

    }
	public function error404()
	{

		//echo "<h1> 4o4 </h1>";
		$this->output->set_status_header('404'); 
		$this->load->view('public/404');
	}

	public function index()
	{
		
		//echo "hello";

	$this->load->view('public/index');
		
	}

	public function socialresponsibility()
	{
		
		//echo "hello";

	$this->load->view('public/social-service');
		
	}


	public function social_responsibilty()
	{
		
		//echo "hello";

	$this->load->view('public/social-service');
		
	}


	public function locate()
	{
		
		//echo "hello";

	$this->load->view('public/location');
		
	}


	public function deals()
	{
		
		//echo "hello";

	$this->load->view('public/deals');
		
	}
	public function products()
	{

		$all_product = $this->userm->all_products('chicken'); // std class object
		$data['data'] = json_decode(json_encode($all_product),true); // converted into array
		// echo "<pre>";
		// print_r($data);
		// exit();
		//$data['data']  = array(
    	// 		 		array(
    	// 		 		'id' => '1',
    	// 		 		'title' => 'Product 1',
    	// 		 		'image_path' => 'assets/user/images/products/min/1.jpg',
    	// 		 		'description' => 'Description 1'
					// 		),
    	// 		 		array(
    	// 		 		'id' => '2',
    	// 		 		'title' => 'Product 2',
    	// 		 		'image_path' => 'assets/user/images/products/min/2.jpg',
    	// 		 		'description' => 'Description 2'
					// 		),
    	// 		 		array(
    	// 		 		'id' => '3',
    	// 		 		'title' => 'Product 3',
    	// 		 		'image_path' => 'assets/user/images/products/min/3.jpg',
    	// 		 		'description' => 'Description 3'
					// 		),
    	// 		 		array(
    	// 		 		'id' => '4',
    	// 		 		'title' => 'Product 4',
    	// 		 		'image_path' => 'assets/user/images/products/min/4.jpg',
    	// 		 		'description' => 'Description 4'
					// 		),
    	// 		 		array(
    	// 		 		'id' => '5',
    	// 		 		'title' => 'Product 5',
    	// 		 		'image_path' => 'assets/user/images/products/min/5.jpg',
    	// 		 		'description' => 'Description 5'
					// 		),
    	// 		 		array(
    	// 		 		'id' => '6',
    	// 		 		'title' => 'Product 6',
    	// 		 		'image_path' => 'assets/user/images/products/min/6.jpg',
    	// 		 		'description' => 'Description 6'
					// 		),
     //                    array(
     //                    'id' => '7',
     //                    'title' => 'Product 7',
     //                    'image_path' => 'assets/user/images/products/min/7.jpg',
     //                    'description' => 'Description 6'
     //                        ),
     //                    array(
     //                    'id' => '8',
     //                    'title' => 'Product 8',
     //                    'image_path' => 'assets/user/images/products/min/8.jpg',
     //                    'description' => 'Description 6'
     //                        ),
     //                    array(
     //                    'id' => '9',
     //                    'title' => 'Product 9',
     //                    'image_path' => 'assets/user/images/products/min/9.jpg',
     //                    'description' => 'Description 6'
     //                        ),
    	// );
		//echo "hello";

	$this->load->view('public/products',$data);
		
	}


	public function details($proid = null ,$pro_title = null)
	{
		
		//echo "hello";

	$this->load->view('public/single-product-v1');
		
	}

	public function login()
	{
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run('user_login')) { //if validation passes
			
			$login_email = $this->input->post('login_email');
			$login_pass = $this->input->post('login_pass');

			if($this->userm->login_check($login_email,$login_pass))
			{


					if($this->userm->verify_check($login_email))
					{
						$this->session->set_userdata('user_id',($login_email));
							redirect('my-orders');
					}
					else
					{
						$failedMessage = 'Your Email is not verified. please verify your email to continue.';
						$this->session->set_flashdata('feedback',$failedMessage);
			            $this->session->set_flashdata('feedback_class', 'alert-danger');
			            $this->session->set_flashdata('feedback_icon', 'fa fa-check-circle');
			            redirect('login');
					}	
	


			}
			else
					{
						$failureMessage = 'Invalid Email/Password. Please provide valid credentials to continue';
						  $this->session->set_flashdata('feedback', $failureMessage);
            $this->session->set_flashdata('feedback_class', 'alert-danger');
            $this->session->set_flashdata('feedback_icon', 'fa fa-exclamation-circle');
			            redirect('login');
					}	

		} else {
			
			$this->load->view('public/login-and-register');
			
		}
	
		
	}

		public function testemail()
	{
		
	$this->load->view('public/login-and-register');
		
	}

		public function my_account()
	{

		$this->is_user_loggedIn();
		$data = array(
			'username' => 'User',
			'img_path' => base_url('assets/user/images/profile/abc.jpg') 

		);
		$data['sidebar'] = $this->load->view('public/myaccount-side-navigation',$data,true);
		$this->load->view('public/my-account',$data);
		
	}

		public function add_address()
	{
		$this->is_user_loggedIn();
		$data = array(
			'username' => 'Anwaar Baig',
			'img_path' => base_url('assets/user/images/profile/abc.jpg') 

		);
		$data['sidebar'] = $this->load->view('public/myaccount-side-navigation',$data,true);
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run('add_address')) {
			 $post = $this->input->post();
			 $post['user_id'] = $this->session->userdata('user_id');
			$post['user_ip'] = $this->input->ip_address();
			
			return $this->_flashAndRedirect(
						$this->userm->add_address($post),
						"New Address Has Been Added Successfully",
						"Something went wrong. Please try Again Later.",
						"add-address"
					);

		}
		else
		{


		$this->load->view('public/add-address',$data);
		}
		
		
	}

		public function my_address()
	{
		$this->is_user_loggedIn();
		$data = array(
			'username' => 'User',
			'img_path' => base_url('assets/user/images/profile/abc.jpg') 

		);
		$data['sidebar'] = $this->load->view('public/myaccount-side-navigation',$data,true);
		
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		$post['user_id'] = $this->session->userdata('user_id');
		if($this->userm->get_address($post)) {
			
			$data['addresses'] = $this->userm->get_address($post);
			$this->load->view('public/my-address',$data);
		}
		else
		{

			$data['addresses'] = $this->userm->get_address($post);
		$this->load->view('public/my-address',$data);
		}
		
		
	}

	public function edit_address($address_id)
	{

		$post['user_id'] = $this->session->userdata('user_id');
		$post['address_id'] = $address_id;
		$data['address'] = $this->userm->get_address_edit($post);

		if(count($data['address']))
		{
			$this->is_user_loggedIn();
			$data = array(
				'username' => 'Anwaar Baig',
				'img_path' => base_url('assets/user/images/profile/abc.jpg') 

			);
			$data['sidebar'] = $this->load->view('public/myaccount-side-navigation',$data,true);
			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
			
			if($this->form_validation->run('add_address')) {
				$post = $this->input->post();
				$post['user_id'] = $this->session->userdata('user_id');
				$post['user_ip'] = $this->input->ip_address();
				$post['address_id'] = $address_id;
				
				return $this->_flashAndRedirect(
					$this->userm->update_address($post),
					"Address Updated Successfully",
					"Something went wrong. Please try Again Later.",
					"edit-address/$address_id"
				);

			}
			else
			{
				$data = array(
					'username' => 'Anwaar Baig',
					'img_path' => base_url('assets/user/images/profile/abc.jpg') 

				);
				$data['sidebar'] = $this->load->view('public/myaccount-side-navigation',$data,true);
				$post['user_id'] = $this->session->userdata('user_id');
				$post['address_id'] = $address_id;
				$data['address'] = $this->userm->get_address_edit($post);
				$this->load->view('public/edit-address',$data);
			}
		}
		else
		{
			redirect('my-address');
		}

		
		
	}

		public function my_orders()
	{

		$this->is_user_loggedIn();
		$data = array(
			'username' => 'User',
			'img_path' => base_url('assets/user/images/profile/abc.jpg') 

		);
		$data['sidebar'] = $this->load->view('public/myaccount-side-navigation',$data,true);
		$this->load->view('public/my-orders',$data);
		
	}

		public function settings()
	{

		$this->is_user_loggedIn();
		$data = array(
			'username' => 'User',
			'img_path' => base_url('assets/user/images/profile/abc.jpg') 

		);
		$data['sidebar'] = $this->load->view('public/myaccount-side-navigation',$data,true);
		$this->load->view('public/my-settings',$data);
		
	}
		public function change_password()
	{

		$this->is_user_loggedIn();
		$data = array(
			'username' => 'User',
			'img_path' => base_url('assets/user/images/profile/abc.jpg') 

		);
		$data['sidebar'] = $this->load->view('public/myaccount-side-navigation',$data,true);
		
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run('change_pass')) { //if validation passes


			$post = $this->input->post();
			$post['user_id'] = $this->session->userdata('user_id');
			$post['user_ip'] = $this->input->ip_address();
			$insert = $this->userm->update_pass($post);
				return $this->_flashAndRedirect(
						$insert,
						"Password Has been Updated Successfully.",
						"Something went wrong. Please try Again Later.",
						"change-password"
					);
		}

		else
		{

			$this->load->view('public/change-pass',$data);
		}
		
		
		
	}

		public function register()
	{
		

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run('user_register')) { //if validation passes
			//Success
			//$reg_email = $this->input->post('reg_email');
			//$reg_password = $this->input->post('reg_password');

			$post = $_POST;
			$post['user_ip'] = $this->input->ip_address();
			$post['token']  = md5(rand(0, 1000));
			$verify_link = base_url("verify/$post[reg_email]/$post[token]");
			$emailtempdatadata = array(
			'title' => 'Verify',
			'message' => 'Thankyou For Registration, Please Click below Given link to verify you account to continue.',
			'buttonlink' => $verify_link,
			'btntitle' => 'Verify Now'
			

		 	);
			$emailtemp = $this->load->view('emailtemp/usernotify',$emailtempdatadata,True);
			$useremaildata = array(
				'to' => $post['reg_email'],
				'subject' => 'Thankyou For Registration - Krispy Chicken',
				'message' => $emailtemp
				 );

			;
			//$reg_user = $this->userm->contact_user($post);
			
			// print_r($useremaildata);
			// exit();

			if(!$this->userm->check_user($post['reg_email']))
			{
						return $this->_flashAndRedirect(
						$this->userm->reg_user($post) && $this->userm->useremail($useremaildata),
						"Your Account has been Registered.Kindly Check your email to verify your account.",
						"Something went wrong. Please try Again Later.",
						"register"
					);
			}
			else
			{
					return $this->_flashAndRedirect(
						false,
						"Your Account has been Registered.Kindly Check your email to verify your account.",
						"This Email is Already Registered. Please Login to Continue",
						"register"
					);
			}


		
		
		
			
		} else {
			
			$this->load->view('public/login-and-register');
			
		}
	
		
	}

	public function verify($email,$token)
	{


		
		if($this->userm->check_user($email) > 0)
		{

			if($this->userm->verify_user_email($email , $token) > 0  )
			{
					return $this->_flashAndRedirect(
								true,
								"Your Account has been Successfully Verified. Thankyou",
								"Something went wrong. Please try Again Later.",
								"login"
							);
			}
			else
			{
				return $this->_flashAndRedirect(
								false,
								"Your Account has been Successfully Verified. Thankyou",
								"Something went wrong. Please try Again Later.",
								"login"
							);
			}
		}
		else
		{

			return $this->_flashAndRedirect(
								false,
								"",
								"We didn't found this account in our database.please register first. Thankyou",
								"login"
							);
		}
		
		
	
		
	}

	public function contact()
	{
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run('contact_form')) { //if validation passes
			//Success
			//$reg_email = $this->input->post('reg_email');
			//$reg_password = $this->input->post('reg_password');
			//$this->userm->contact_user($post)
			$post = $_POST;
			$post['user_ip'] = $this->input->ip_address();

			$emailtempdatadata = array(
			'title' => 'Thank you',
			'message' => 'Thankyou For Contacting Us, Our Customer Support Representative will get back to you Shortly. Have a nice day.',
			'buttonlink' => base_url('about'),
			'btntitle' => 'Verify Now'
			

		 	);
			$emailtemp = $this->load->view('emailtemp/usernotify',$emailtempdatadata,True);
			$useremaildata = array(
				'to' => $post['email'],
				'subject' => 'Thankyou For Contacting Us - Krispy Chicken',
				'message' => $emailtemp,
				
				 );


			//$reg_user = $this->userm->contact_user($post);
		return $this->_flashAndRedirect(
			$this->userm->contact_user($post) && 
			$this->userm->useremail($useremaildata),
						"Thankyou For Contacting Us, Our Customer Support Representative will get back to you Shortly.",
						"Something went wrong. Please try Again Later.",
						"contact"
					);
		
			
		} else {
			
			$this->load->view('public/contact');
			
		}
	
		
	}

	public function careers()
	{
		
	$this->load->view('public/careers');
		
	}

	public function email()
	{

		$data = array(
			'title' => 'Thank you',
			'message' => 'Thankyou For Contacting Us, Our Customer Support Representative will get back to you Shortly. Have a nice day.'
			

		 );
		
	$this->load->view('emailtemp/usernotify',$data);
		
	}

	public function cart()
	{
		$this->is_user_loggedIn();
		$userdata['user_id'] = $this->session->userdata('user_id');
		$userdata['user_ip'] = $this->input->ip_address();
		$request = $_GET ? $_GET['request'] : '';
		$id = $_GET ? $_GET['id'] : '';
		//$pid = $_GET ? $_GET['pid'] : '';
		$data = array();

		if($request == 'add')
		{
				if(!$id == Null)
			{
				$arr['product_id'] = $id;
				$data = $this->userm->get_product_details($arr);




				if($data)
				{

					$data->user_ip = $userdata['user_ip']; 
					//$this->userm->add_cart_product($data ,$arr);
					return $this->_flashAndRedirect(
								$this->userm->add_cart_product($data ,$arr),
								"Your Account has been Successfully Verified. Thankyou",
								"Something went wrong. Please try Again Later.",
								"cart"
							);


					
				}
				//$data = json_decode($data);
				//$id = $id;
				
			}	
		}
		else if($request == 'remove')
		{
			// echo "remove";
			// exit();

			if(!$id == Null)
			{
				$data['user_id'] = $userdata['user_id'];
				$data['cart_id'] = $id;
				// print_r($data);
				// exit();
				return $this->_flashAndRedirect(
								$this->userm->remove_cart_product($data),
								"Your Account has been Successfully Verified. Thankyou",
								"Something went wrong. Please try Again Later.",
								"cart"
							);
			}
		}
	

			$products['products'] = $this->userm->get_cart_products($userdata['user_id']);
			$this->load->view('public/cart',$products);

		

		
		//echo "hello";

	
		
	}

	public function menu()
	{
		
		//echo "hello";

	$this->load->view('public/menu');
		
	}

	public function about()
	{
		
		//echo "hello";

	$this->load->view('public/about');
		
	}

	public function terms_conditions()
	{
		
		//echo "hello";

	$this->load->view('public/terms-and-conditions');
		
	}

	public function sendemail()
	{
		
		//echo "hello";

	$this->load->view('public/terms-and-conditions');
		
	}
	  public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
        return redirect('login');
    }

	 private function _flashAndRedirect( $successful, $successMessage, $failureMessage,$successpage )
    {
        if( $successful ) {
            $this->session->set_flashdata('feedback',$successMessage);
            $this->session->set_flashdata('feedback_class', 'alert-success');
            $this->session->set_flashdata('feedback_icon', 'fa fa-check-circle');
        } else {
            $this->session->set_flashdata('feedback', $failureMessage);
            $this->session->set_flashdata('feedback_class', 'alert-danger');
            $this->session->set_flashdata('feedback_icon', 'fa fa-exclamation-circle');
        }
        return redirect($successpage);
    }



}