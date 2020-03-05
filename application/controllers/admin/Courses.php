<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
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
		 //   $data['courses'] = $this->coursesm->department($user->department_id,$level);

     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar',$data);
     		$this->load->view('admin/courses/home',$data);
     		$this->load->view('admin/_template/footer');
	}
	public function level($level_id)
	{
		
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		    }

		    if (isset($_POST['addnew'])) {
		    	
		    	
		    	$data = array(
		    		'course_code' => $this->input->post('course_code'),   		
		    		'course_title' => $this->input->post('course_title'),   		
		    		'credit_unit' => $this->input->post('credit_unit'),   		
		    		'level_id' => $this->input->post('level_id'),   		
		    		'department_id' => $this->input->post('department_id'),   		
		    		'semester' => $this->input->post('semester'),   		
		          );
		    	$query = $this->db->insert('courses',$data);
		    	if ($query) {
		    		
		    	}
		    }

		   
		    $data['user'] = $user = $this->usermodel->get_user();
		    $data['courses'] = $this->coursesm->department($user->department_id,$level_id);
		    $data['level_id'] = $level_id;

     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar',$data);
     		$this->load->view('admin/courses/level',$data);
     		$this->load->view('admin/_template/footer');
	}
	
}
