<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('url', 'language'));
		
	}
	

	public function index()
	{
         
		$data['headers'] = array(
				'title' => 'Welcome', 
			);
		$this->load->view('layout/header', $data);
		$this->load->view('welcome', $data);
		$this->load->view('layout/footer');
	}
}
