<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
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

		   $data['total_students'] = $this->db->query("SELECT count(*) as total_students FROM students")->row();
		   $data['total_departments'] = $this->db->query("SELECT count(*) as total_depts FROM departments")->row();
		   $data['fees_paid'] = $this->db->query("SELECT count(*) as total_fees FROM transactions")->row();
		   $data['total_reg'] = $this->db->query("SELECT count(*) as total_reg FROM student_courses GROUP by student_id")->row();
		   $data['faculties'] = $this->faculties();
		   $data['students'] = $this->students();
		  
		  
		   $data['user'] = $this->usermodel->get_user();

     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar', $data);
     		$this->load->view('admin/home',$data);
     		$this->load->view('admin/_template/footer');
    }

    public function faculties()
    {
    	$this->db->select('*,count(*) as total_faculty, count(department) as no_depts,');
    	$this->db->from('faculty');
    	$this->db->join('departments','departments.faculty_id=faculty.id','left');
    	$this->db->group_by('faculty');
    	$query = $this->db->get()->result();
    	if ($query) {
    		return $query;
    	}
    }
    public function students()
    {
    	$this->db->select('faculty, count(*) as total_students,');
    	$this->db->from('students');
    	$this->db->join('departments','departments.id=students.department_id','full');
    	$this->db->join('faculty','departments.faculty_id=faculty.id');
    	$this->db->group_by('faculty');
    	$query = $this->db->get()->result();
    	if ($query) {
    		return $query;
    	}
    }

	
	
}
