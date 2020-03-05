<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Levels extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('url', 'language'));
		$this->load->model(array('usermodel','admin/studentsm'=>'studm'));
		
	}
	

	public function index()
	{
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }


		    if (isset($_POST['addlevel'])) {
		   	$data = array(
		   		'level' => $this->input->post('level'), 
		   	);
		   	$this->db->insert('levels',$data);
		   }
		$data['user'] = $this->usermodel->get_user();
		$data['levels'] = $this->db->query("SELECT * FROM levels")->result();
         
		$data['headers'] = array(
				'title' => 'Welcome', 
			);

		$data['students'] = $this->studm->listall();
		$this->load->view('admin/_template/header', $data);
		$this->load->view('admin/_template/navbar');
		$this->load->view('admin/levels', $data);
		$this->load->view('admin/_template/footer');
	}
}
