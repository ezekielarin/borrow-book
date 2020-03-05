<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('url', 'language'));
		$this->load->model(array('usermodel','admin/staffm'=>'staffm'));
		
	}
	

	public function index()
	{
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		$data['user'] = $this->usermodel->get_user();
         
		$data['headers'] = array(
				'title' => 'Welcome', 
			);

		$data['staff'] = $this->usermodel->listusers();

		$this->load->view('admin/_template/header', $data);
		$this->load->view('admin/_template/navbar');
		$this->load->view('admin/staff/home', $data);
		$this->load->view('admin/_template/footer');
	}

	public function newstaff()
	{
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		$data['user'] = $this->usermodel->get_user();
         
		$data['headers'] = array(
				'title' => 'Welcome', 
			);

		$data['staff'] = $this->usermodel->listusers();

		$this->load->view('admin/_template/header', $data);
		$this->load->view('admin/_template/navbar');
		$this->load->view('admin/staff/newstaff', $data);
		$this->load->view('admin/_template/footer');
	}

	public function vw($staff_id)
	{
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		$data['user'] = $this->usermodel->get_user();
         
		$data['headers'] = array(
				'title' => 'Welcome', 
			);

		$data['staff'] = $this->staffm->get_user($staff_id);

		$this->load->view('admin/_template/header', $data);
		$this->load->view('admin/_template/navbar');
		$this->load->view('admin/staff/view_staff', $data);
		$this->load->view('admin/_template/footer');
	}

	public function edit()
	{
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }


         if (isset($_POST['update'])) {
		 	$this->staffm->editstaff();
		 }
		   
         $data['error']  = array('error' => "", );;
		 if (isset($_POST['updatephoto'])) {
		 	   
		 	   $this->profileupload(); 
		    }
		$data['user'] = $this->usermodel->get_user();

         if (isset($_GET['sfid'])) {
		 	$staff_id = $_GET['sfid'];
		 	$data['staff'] = $this->staffm->get_user($staff_id);
		 }else{
		 	redirect('/admin/staff');
		 }
		$data['headers'] = array(
				'title' => 'Welcome', 
			);

		$this->load->view('admin/_template/header', $data);
		$this->load->view('admin/_template/navbar');
		$this->load->view('admin/staff/edit_staff', $data);
		$this->load->view('admin/_template/footer');
	}

	public function profileupload()
	{
	            $config['upload_path']          = './uploads/profiles/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 7000;
                $config['max_width']            = 2024;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('profilephoto'))
                {
                        $data['error'] = array('error' => $this->upload->display_errors());                        
                }
                else
                {
                   // $data = array('upload_data' => $this->upload->data());
                    $data = array('photo' => $this->upload->file_name, );
                    $where = array('uid' => $this->input->post('staff_id'), );
                    $this->db->update('users',$data,$where);
                }
	}
}
