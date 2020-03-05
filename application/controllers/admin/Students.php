<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {
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
		$data['user'] = $this->usermodel->get_user();
         
		$data['headers'] = array(
				'title' => 'Welcome', 
			);

		$data['students'] = $this->studm->listall();
		$this->load->view('admin/_template/header', $data);
		$this->load->view('admin/_template/navbar');
		$this->load->view('admin/students/home', $data);
		$this->load->view('admin/_template/footer');
	}

	public function vw($stud_id)
	{
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		$data['user'] = $this->usermodel->get_user();
         
		$data['headers'] = array(
				'title' => 'Welcome', 
			);

		$data['student'] = $this->studm->getstudent($stud_id);

		$this->load->view('admin/_template/header', $data);
		$this->load->view('admin/_template/navbar');
		$this->load->view('admin/students/viewstud', $data);
		$this->load->view('admin/_template/footer');
	}

    public function edit()
	{
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		$data['user'] = $this->usermodel->get_user();
         
		$data['headers'] = array(
				'title' => 'Welcome', 
			);
		 if (isset($_POST['update'])) {
		 	$this->studm->editstudent();
		 }
         $data['error']  = array('error' => "", );;
		 if (isset($_POST['updatephoto'])) {
		 	   
		 	   $this->profileupload(); 
		    }

		 if (isset($_GET['studid'])) {
		 	$studid = $_GET['studid'];
		 	$data['student'] = $this->studm->getstudent($studid);
		 }else{
		 	redirect('/admin/students');
		 }

		 $data['headers'] = array(
				'title' => 'Welcome', 
			);

		$this->load->view('admin/_template/header', $data);
		$this->load->view('admin/_template/navbar');
		$this->load->view('admin/students/editstud', $data);
		$this->load->view('admin/_template/footer');
	}

	public function newstudent()
	{
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		$data['user'] = $this->usermodel->get_user();
		if (isset($_POST['addnew'])) {
			$this->studm->addnew();
		}

		$data['headers'] = array(
				'title' => 'Welcome', 
			);


		$this->load->view('admin/_template/header', $data);
		$this->load->view('admin/_template/navbar');
		$this->load->view('admin/students/newstud', $data);
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
                    $data = array('upload_data' => $this->upload->data());
                    $data = array('photo' => $this->upload->file_name, );
                    $where = array('sid' => $this->input->post('student_id'), );
                    $this->db->update('students',$data,$where);
                }
	}
}
