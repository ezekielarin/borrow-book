<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model
{
	

	public function __construct()
	{
	
		$this->load->helper('date');
		$this->load->helper('string');


	}


	public function listusers()
	{
		$this->db->select('*');
		$this->db->from('users');		
			
		$query = $this->db->get()->result();
		
		if ($query) {
			return $query;
		}
	}

	
	
	
}