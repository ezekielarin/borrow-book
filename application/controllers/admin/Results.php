<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Results extends CI_Controller {
 public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model(array('usermodel'));
		
	}

	
	public function index()
	{
		
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		   $data['user'] = $this->usermodel->get_user();
		 
     		
     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar',$data);
     		$this->load->view('admin/result',$data);
     		$this->load->view('admin/_template/footer');
	}
	
}
