<?php 

$config = [


'user_login'			=>	[
														[
															'field'	=>	'login_email',
															'label'	=>	'email',
															'rules'	=>	'required|valid_email|trim',
														],
														[
															'field'	=>	'login_pass',
															'label'	=>	'password',
															'rules'	=>	'required|trim',
														]
							],

'change_pass'			=>	[
														[
															'field'	=>	'currentpass',
															'label'	=>	'current password',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'newpass',
															'label'	=>	'new password',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'cnewpass',
															'label'	=>	'confirm password',
															'rules'	=>	'required|matches[newpass]',
														]
							],
'user_register'			=>	[
														[
															'field'	=>	'reg_name',
															'label'	=>	'full name',
															'rules'	=>	'required|alpha_numeric_spaces|trim',
														],
														[
															'field'	=>	'reg_email',
															'label'	=>	'email address',
															'rules'	=>	'required|valid_email|trim',
														],
														[
															'field'	=>	'reg_password',
															'label'	=>	'password',
															'rules'	=>	'required|trim',
														]
							],
'contact_form'			=>	[
														[
															'field'	=>	'fullname',
															'label'	=>	'full name',
															'rules'	=>	'required|alpha_numeric_spaces|trim',
														],
														[
															'field'	=>	'phone',
															'label'	=>	'phone',
															'rules'	=>	'required|numeric|min_length[9]|max_length[9]|trim',
														],
														[
															'field'	=>	'email',
															'label'	=>	'email address',
															'rules'	=>	'required|valid_email|trim',
														],
														[
															'field'	=>	'message',
															'label'	=>	'message',
															'rules'	=>	'required|trim',
														]
							],
'add_address'			=>	[
														[
															'field'	=>	'address_title',
															'label'	=>	'address title',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'address_type',
															'label'	=>	'address type',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'city',
															'label'	=>	'city',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'contact',
															'label'	=>	'contact',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'address_description',
															'label'	=>	'address',
															'rules'	=>	'required|max_length[50]|trim',
														]
							]




]
















 ?>