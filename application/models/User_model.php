<?php

/**
* 
*/
class user_model extends CI_Model
{
	


	public function login_check($email,$pass)
	{
		
		$q = 	$this->db
					->from('user_tbl')
					->where('email',$email)
					->where('password',$pass)
					->get();

					if($q->num_rows() > 0)
					{
						
						return true;
					}
					else
					{
						return false;
					}

	}

	public function verify_check($email)
	{
		
		$q = 	$this->db
					->from('user_tbl')
					->where('email',$email)
					->where('verify','verified')
					->get();

					if($q->num_rows() > 0)
					{
						
						return true;
					}
					else
					{
						return false;
					}

	}

	public function check_user($email)
	{
		
		$q = 	$this->db
					->from('user_tbl')
					->where('email',$email)
					->get();

					if($q->num_rows() > 0)
					{


						
						return true;
					}
					else
					{
						return false;
					}

	}
	public function verify_user_email($email,$token)
	{
		

						$q = $this->db
								  ->set('verify', 'verified')
								  ->where('email', $email)
								  ->where('token', $token)
								  ->update('user_tbl');
						if($q)
						{
							// $msg = "success";
							// return $msg;
							return true;
						}
						else
						{
							// $msg =  "notsuccess";
							// return $msg;
							return false;
						}

						
					// }
					// else
					// {
					// 	$msg = 'alreadyverified';
					// 	return $msg;
					// }

					
					

	}

		public function reg_user($array)
	{


		$data = array(
			'name' => $array['reg_name'],
			'email' => $array['reg_email'], 
			'password' => $array['reg_password'],
			'modified_on' => date('d/m/Y H:i:s'),
			'created_on' => date('d/m/Y H:i:s'),
			'user_ip' => $array['user_ip'],
			'status' => 'active',
			'verify' => 'unverified',
			'token' => $array['token'],


		);

		if($this->db->insert('user_tbl', $data))
		 		{
		 			return true;
		 		}
		 		else
		 		{
		 			return false;
		 		}
			
	}

		public function add_address($array)
	{


		$data = array(
			'user_id' => $array['user_id'], 
			'title' => $array['address_title'],
			'type' => $array['address_type'], 
			'city' => $array['city'],
			'contact_no' => $array['contact'], 
			'address' => $array['address_description'],
			'modified_on' => date('d/m/Y H:i:s'),
			'created_on' => date('d/m/Y H:i:s'),
			'user_ip' => $array['user_ip']
			


		);

		if($this->db->insert('user_address_tbl', $data))
		 		{
		 			return true;
		 		}
		 		else
		 		{
		 			return false;
		 		}
			
	}

	public function get_address($array)
	{


	
	$q = 	$this->db
					->from('user_address_tbl')
					->where('user_id',$array['user_id'])

					->get();

					if($q->num_rows() > 0)
					{


						
						return $q->result();
					}
					else
					{
						return $q->result();
						//return $q->result();
					}
			
	}
	

		public function get_address_edit($array)
	{


	
	$q = 	$this->db
					->from('user_address_tbl')
					->where('user_id',$array['user_id'])
					->where('id',$array['address_id'])
					->get();

					if($q->num_rows() > 0)
					{


						
						return $q->row();
					}
					else
					{
						return $q->result();
						//return $q->result();
					}
			
	}
		public function update_address($array)
	{


	
		$data = array(
			'user_id' => $array['user_id'], 
			'title' => $array['address_title'],
			'type' => $array['address_type'], 
			'city' => $array['city'],
			'contact_no' => $array['contact'], 
			'address' => $array['address_description'],
			'modified_on' => date('d/m/Y H:i:s'),
			//'created_on' => date('d/m/Y H:i:s'),
			'user_ip' => $array['user_ip']
			


		);

		if($this->db->where('user_id', $array['user_id'])
					->where('id', $array['address_id'])
					->update('user_address_tbl', $data))
		 		{
		 			return true;
		 		}
		 		else
		 		{
		 			return false;
		 		}
			
	}

		public function update_pass($array)
	{

	

	
		$data = array(
			 'address' => 'address check',
			'password' => $array['newpass'],
			'modified_on' => date('d/m/Y H:i:s'),
			//'created_on' => date('d/m/Y H:i:s'),
			//'user_ip' => $array['user_ip']
			


		);

		// print_r($array);
		// exit();

	$q = $this->db->where('email', $array['user_id'])
					->where('password',$array['currentpass'])
					->update('user_tbl',$data);
				$effect_row =	$this->db->affected_rows();
					//$lastq = $this->db->last_query();
					// echo $lastq;
					// exit();

		if($effect_row > 0)
		 		{
		 			return true;
		 		}
		 		else
		 		{
		 			return false;
		 		}
			
	}
			
	


	public function contact_user($array)
	{


		$data = array(
			'fullname' => $array['fullname'],
			'email' => $array['email'], 
			'phone' => $array['phone'],
			'message' => $array['message'],
			'created_on' => date('d/m/Y H:i:s'),
			'user_ip' => $array['user_ip']
			

		);

		if($this->db->insert('contact_tbl', $data))
		{
			return true;
		}
		else
		{
			return false;
		}

	}

		public function all_products($category)
	{


	
		$q = 	$this->db
				 ->from('product_tbl')
				 ->where('category',$category)
				 ->limit('3','0')
				 ->get();

					if($q->num_rows() > 0)
					{


						
						return $q->result();
					}
					else
					{
						return $q->result();
						//return $q->result();
					}
			
	}

		public function get_product_details($arr)
	{


	
	$q = 	$this->db
					->from('product_tbl')
					->where('id',$arr['product_id'])
					//->where('user_id',$array['user_id'])

					->get();

					if($q->num_rows() > 0)
					{


						
						return $q->row();
					}
					else
					{
						return $q->row();
						//return $q->result();
					}
			
	}

		public function remove_cart_product($arr)
	{

		// print_r($arr);
		// exit();


	
	$q = 	$this->db->where('cart_id',$arr['cart_id'])
					//->where('product_id',$arr['product_id'])
					 ->where('user_id',$arr['user_id'])
					->delete('cart_tbl');	
					
					// echo $this->db->last_query();
					// exit();
					if($q)
					{


						return true;
						//return $q->row();
					}
					else
					{
						return false;
						//return $q->row();
						//return $q->result();
					}
			
	}
	

	// Cart functions
		public function add_cart_product($array,$id)
	{

		$product = $this->get_product_details($id);
		$product = json_decode(json_encode($product),true);
		$product['qty'] = 1;
		$product['user_ip'] = $array->user_ip;
		// echo "<pre>";
		// print_r($product);
		// exit();
		$data = array(
			
			'cart_title' => $product['title'], 
			'cart_img' => $product['image'],
			'cart_qty' => $product['qty'], 
			'cart_price' => $product['price'],
			'user_id' => $product['user_id'], 
			'modified_on' => date('d/m/Y H:i:s'),
			'created_on' => date('d/m/Y H:i:s'),
			'user_ip' => $product['user_ip']
			


		);

// echo "<pre>";
// print_r($data);
// 		exit();

		if($this->db->insert('cart_tbl', $data))
		 		{


		 			return true;
		 		}
		 		else
		 		{
		 			return false;
		 		}
			
	}
	public function get_cart_products($user_id)
	{


	
	$q = 	$this->db
					->from('cart_tbl')
					->where('user_id',$user_id)
					->get();

					if($q->num_rows() > 0)
					{


						
						return $q->result();
					}
					else
					{
						return $q->result();
						//return $q->result();
					}
			
	}



	// Cart functions

	public function adminemail($array)
    {
    	
    	$this->load->library('email');

        //$from_email = $mail_data['from']; //change this to yours
        $subject = $array['subject'];
        $message = $array['message'];
        //$to = $mail_data['to'];
        //$message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://www.merayliyezameen.com/verify/' . $to_email. '<br /><br /><br />Thanks<br />Mydomain Team';
        
        //configure email settings
        $config['protocol'] = 'mail';
        $config['smtp_crypto']= 'tls'; 
        $config['smtp_host'] = 'mail.lcn.com'; //smtp host name
        //$config['mailpath'] = '/usr/sbin/sendmail';
        $config['smtp_port'] = '587'; //smtp port number
        $config['smtp_user'] = 'webmaster@krispychicken.com';
        $config['smtp_pass'] = 'webdev#456'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        
        //send mail
        $this->email->from('webmaster@krispychicken.com', 'Webmaster - krispy Chicken');
        $this->email->to('anvaarbaig@outlook.com');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_newline("\r\n");

        return $this->email->send();

    }

    	public function useremail($array)
    {

    	// print_r($array);
    	// exit();
    	
    	$this->load->library('email');

       // $from_email = $array['from']; //change this to yours
        $subject = $array['subject'];
        $message = $array['message'];
        $to = $array['to'];
        //$message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://www.merayliyezameen.com/verify/' . $to_email. '<br /><br /><br />Thanks<br />Mydomain Team';
        
        //configure email settings
        $config['protocol'] = 'mail';
        $config['smtp_crypto']= 'tls'; 
        $config['smtp_host'] = 'mail.lcn.com'; //smtp host name
        //$config['mailpath'] = '/usr/sbin/sendmail';
        $config['smtp_port'] = '587'; //smtp port number
        $config['smtp_user'] = 'webmaster@krispychicken.com';
        $config['smtp_pass'] = 'webdev#456'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        
        //send mail
        $this->email->from('customer@krispychicken.com', 'Krispy Chicken');
        $this->email->to($to);
        //$this->email->bcc('anvaarbaig@outlook.com');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_newline("\r\n");
        return $this->email->send();
    }
}














 ?>