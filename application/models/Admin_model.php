<?php 



class Admin_model extends CI_Model
{
	


	public function user_validate($email,$pass)
	{
		
			if($email == 'admin@krispychicken.com' && $pass == 'admin123')
			{
				return true;
			}
			else
			{
				return false;
			}
	}

	public function add_product($data)
	{
		
			if(!empty($data))
			{
				return true;
			}
			else
			{
				return false;
			}
	}
}















 ?>