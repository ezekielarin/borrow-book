<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculties extends CI_Controller {
 public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model(array('usermodel','admin/facultym'=>'facultym','admin/coursesm'=>'coursesm','admin/staffm'=>'staffm'));
	}

	
	public function index()
	{
		
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		   if (isset($_POST['addfaculty'])) {
		   	$data = array(
		   		'faculty' => $this->input->post('faculty'), 
		   	);
		   	$this->db->insert('faculty',$data);
		   }


		   $data['user'] = $this->usermodel->get_user();
		   $data['faculties'] = $this->db->query("SELECT * FROM faculty")->result();
		  
     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar',$data);
     		$this->load->view('admin/faculties/home',$data);
     		$this->load->view('admin/_template/footer');
	}

	public function vw($fid)
	{
		
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		   if (isset($_POST['newdepartment'])) {
		   	$data = array(
		   		'faculty_id' => $this->input->post('faculty_id'), 
		   		'department' => $this->input->post('department'), 
		   	);
		   	$this->db->insert('departments',$data);
		   }

		   
		   $data['user'] = $this->usermodel->get_user();
		   $data['faculty'] = $this->db->query("SELECT * FROM faculty WHERE id='$fid'")->row();
		   $data['departments'] = $this->facultym->departments($fid);
		   
     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar',$data);
     		$this->load->view('admin/faculties/viewfaculty',$data);
     		$this->load->view('admin/_template/footer');
	}

	public function department($dept_id)
	{  
		$faculty_id = $_GET['fid'];
		
		
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		   if (isset($_POST['addcourse'])) {
		   	$data = array(
		   		'course_code' => $this->input->post('course_code'), 
		   		'course_title' => $this->input->post('course_title'), 
		   		'credit_unit' => $this->input->post('credit_unit'), 
		   		'semester' => $this->input->post('semester'), 
		   		'level' => $this->input->post('level'), 
		   		'department' => $this->input->post('department_id'), 
		   	);
		   	$this->db->insert('courses',$data);
		   }

		   $data['dept_id'] = $dept_id;
		   $data['user'] = $this->usermodel->get_user();
		   $data['faculty'] = $this->db->query("SELECT * FROM faculty WHERE id='$faculty_id'")->row();
		   $data['staff'] = $this->staffm->dept_staff($dept_id);
		   $data['department'] = $this->db->query("SELECT * FROM departments WHERE id='$dept_id'")->row();
		  
     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar',$data);
     		$this->load->view('admin/faculties/viewdept',$data);
     		$this->load->view('admin/_template/footer');
	}
	
	
	
}
