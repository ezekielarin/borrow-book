<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Controller {
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
		    	
		    	$where = array('_id' => $this->input->post('id'), ); 
		    	$data = array(
		    		
		    		'gateway' => $this->input->post('gateway'), 
		    		'public_key' => $this->input->post('public_key'), 
		    		'private_key' => $this->input->post('private_key'), 
		    		'secret_key' => $this->input->post('secret_key'), 
		    		
		          );
		    	$update = $this->db->update('settings_payments',$data,$where);
		    	if ($update) {
		    		# code...
		    	}
		    }
		   $data['user'] = $this->usermodel->get_user();
		   $data['payments'] = $this->allpayments();
		   
     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar',$data);
     		$this->load->view('admin/payments/home',$data);
     		$this->load->view('admin/_template/footer');
	}

	public function settings()
	{
		
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		   if (isset($_POST['save'])) {
		     
		    	$data = array(
		    		
		    		'price_from' => $this->input->post('price_from'), 
		    		'price_to' => $this->input->post('price_to'), 
		    		'percentage' => $this->input->post('percentage'), 
		    		
		          );
		    	$save = $this->db->insert('fee_settings',$data);
		    	if ($save) {
		    		# code...
		    	}
		    }

		  
		     $data['user'] = $this->usermodel->get_user();
		     $data['settings'] = $this->db->query("SELECT * FROM fee_settings")->row();
     		$this->load->view('admin/_template/header');
     		$this->load->view('admin/_template/navbar',$data);
     		$this->load->view('admin/payments/settings',$data);
     		$this->load->view('admin/_template/footer');
	}

   
	
	public function history()
	{
		
		if (!$this->usermodel->islogged()) {
			redirect('/admin/auth/login');
		   }
		   
		   $data['user'] = $this->usermodel->get_user();
		    $data['payments'] = $this->db->query("SELECT * FROM ride_payments")->row();
     		$this->load->view('admin/template/header');
     		$this->load->view('admin/template/navbar',$data);
     		$this->load->view('admin/payments/history',$data);
     		$this->load->view('admin/template/footer');
	}

	private function allpayments()
	{
		$this->db->select('*');
		$this->db->from('transactions');
		$this->db->where('status','paid');
	  $query = $this->db->get()->result();
	  if ($query) {
	  	return $query;
	  }

	}
}
