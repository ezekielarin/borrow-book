<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
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

		   if (isset($_POST['update'])) {
		   	$where = array('stid' => $this->input->post('stid'));
		    $data = array(
		   	'site_title' => $this->input->post('site_title'), 
		   	'moto' => $this->input->post('moto'), 
		   	'email' => $this->input->post('email'), 
		   	'phone' => $this->input->post('phone'), 
		   	'address' => $this->input->post('address'), 
		   );
		   $save = $this->db->update('settings_site',$data,$where);
		   if ($save) {

		      }
		   }

		   if (isset($_POST['upload'])) {
		      $this->logoupload();
		   }
		   
		   
		   $data['user'] = $this->usermodel->get_user();
		   $data['settings'] = $this->db->query("SELECT * FROM settings_site")->row();
     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar', $data);
     		$this->load->view('admin/settings/home',$data);
     		$this->load->view('admin/_template/footer');
	}
	
	public function gateways()
	{
		
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }

		   if (isset($_POST['update'])) {
		   	$where = array('stid' => $this->input->post('stid'));
		    $data = array(
		   	'site_title' => $this->input->post('site_title'), 
		   	'moto' => $this->input->post('moto'), 
		   	'email' => $this->input->post('email'), 
		   	'phone' => $this->input->post('phone'), 
		   	'address' => $this->input->post('address'), 
		   );
		   $save = $this->db->update('payment_gateways',$data,$where);
		   if ($save) {

		   }
		   }
		    
		   $data['user'] = $this->usermodel->get_user();
		   $data['settings'] = $this->db->query("SELECT * FROM payment_gateways")->row();
     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar', $data);
     		$this->load->view('admin/settings/payment_gateways',$data);
     		$this->load->view('admin/_template/footer');
	}

	public function logoupload()
	{
	            $config['upload_path']          = './uploads/images/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 7000;
                $config['max_width']            = 2024;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logo'))
                {
                	$where = array('stid' => $this->input->post('stid'), );
                    $data = array('logo' => $this->upload->file_name, );
                   
                    $this->db->update('settings_site',$data,$where);
                
                                               
                }else
                {
                   $data['error'] = array('error' => $this->upload->display_errors()); 
                	
                }
	}
	
}
