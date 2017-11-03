<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {

	public function __construct()
	{
        parent::__construct();
		//$this->is_loggedIn();
		
		$this->load->model('User_model','userm');	
		
		

		//ob_start();

    }

    public function index()
    {

    	$data['data']  = array(
    			 		array(
    			 		'id' => '1',
    			 		'title' => 'Product 1',
    			 		'image_path' => 'assets/user/images/products/min/1.jpg',
    			 		'description' => 'Description 1'
							),
    			 		array(
    			 		'id' => '2',
    			 		'title' => 'Product 2',
    			 		'image_path' => 'assets/user/images/products/min/2.jpg',
    			 		'description' => 'Description 2'
							),
    			 		array(
    			 		'id' => '3',
    			 		'title' => 'Product 3',
    			 		'image_path' => 'assets/user/images/products/min/3.jpg',
    			 		'description' => 'Description 3'
							),
    			 		array(
    			 		'id' => '4',
    			 		'title' => 'Product 4',
    			 		'image_path' => 'assets/user/images/products/min/4.jpg',
    			 		'description' => 'Description 4'
							),
    			 		array(
    			 		'id' => '5',
    			 		'title' => 'Product 5',
    			 		'image_path' => 'assets/user/images/products/min/5.jpg',
    			 		'description' => 'Description 5'
							),
    			 		array(
    			 		'id' => '6',
    			 		'title' => 'Product 6',
    			 		'image_path' => 'assets/user/images/products/min/6.jpg',
    			 		'description' => 'Description 6'
							),
                        array(
                        'id' => '7',
                        'title' => 'Product 7',
                        'image_path' => 'assets/user/images/products/min/7.jpg',
                        'description' => 'Description 6'
                            ),
                        array(
                        'id' => '8',
                        'title' => 'Product 8',
                        'image_path' => 'assets/user/images/products/min/8.jpg',
                        'description' => 'Description 6'
                            ),
                        array(
                        'id' => '9',
                        'title' => 'Product 9',
                        'image_path' => 'assets/user/images/products/min/9.jpg',
                        'description' => 'Description 6'
                            ),
    	);
    	$this->load->view('public/products',$data);
    }
	
	public function burgers()
    {
		$this->load->view('public/products');
    }

      public function details($proid = Null)
    {


    	

    	// $data  = array(
    	// 		 		array(
    	// 		 		'title' => 'Product 1',
    	// 		 		'image_path' => 'products/1.jpg'
					// 		),
    	// 		 		array(
    	// 		 		'title' => 'Product 2',
    	// 		 		'image_path' => 'products/2.jpg'
					// 		),
    	// );
    	$this->load->view('public/single-product');
    }
}



?>