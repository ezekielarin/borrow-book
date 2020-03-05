<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api_auth extends CI_Model
{
	

	public function __construct()
	{
		$this->load->helper('date');

		}

	
	public function check_key($key)
	{
		$this->db->select('*'); 
		$this->db->from('api_keys');
		$this->db->where('key',$key);
		$query = $this->db->get()->result();
		if ($query) {
			return 1;
		}else{
			return 0;
		}
	}

	public function loguser($key,$usertype,$username,$password)
	{
		//check if the api key is valid
		
	//if ($this->check_key($key)==1) {	
		
			//if ($usertype=='driver') {
				$this->db->select('*'); 
				$this->db->from('driver');
				$this->db->where('email',$username);
				$this->db->where('password',$password);
				//$this->db->where('password',$this->encpassword($password));
				$query = $this->db->get();
				if ($query) {
					return $query->row();
				}else{
					return $query->error;
				}
		//	}


			//if ($usertype=='rider') {
				$this->db->select('*'); 
				$this->db->from('rider');
				$this->db->where('email',$username);
				//$this->db->where('password',$this->encpassword($password));
			//	$this->db->where('password',$password);
				$query = $this->db->get();
				if ($query) {
					return $query->row();
				}else{
					return $query->error;
				}
			//}
	 //  }
		
	}

	public function encpassword($password)
	{
	 return md5($password);
	}
}
