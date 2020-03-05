<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
 public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model(array('usermodel',array('admin/coursesm' =>'coursesm', )));
	}

	
	public function index()
	{
           if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		    }

	
		      $data['user'] = $user = $this->usermodel->get_user();
		      $data['courses'] = $this->coursesm->course_reg($user->department_id);

     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar',$data);
     		$this->load->view('admin/registration/home',$data);
     		$this->load->view('admin/_template/footer');
	}
	public function vw($stud_id)
	{
		
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		    }
		   
		    $data['user'] = $user = $this->usermodel->get_user();
		    $data['courses'] = $this->coursesm->student_courses($stud_id);
		    $data['units_stud'] = $this->coursesm->student_unit($stud_id);
	
     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar',$data);
     		$this->load->view('admin/registration/view',$data);
     		$this->load->view('admin/_template/footer');
	}

	public function ajax_stud()
	{

		$this->db->select('*');
		$this->db->from('students');
		//$this->db->where('department_id',$dept_id);
	    //$this->db->join('students','students.id=student_registration.student_id');
		$list = $this->db->get()->result();
		
		echo json_encode($list);
	}
	
}
